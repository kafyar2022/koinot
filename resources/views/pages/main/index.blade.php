@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-page">
    @if (count($data['banners']) != 0)
      <div class="glide banner">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data['banners'] as $banner)
              <li class="glide__slide">
                <img
                  class="banner__img"
                  src="{{ asset('img/banners/' . $banner->img) }}"
                  alt="Баннер"
                  width="1920"
                  height="540">
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__bullets" data-glide-el="controls[nav]">
          @foreach ($data['banners'] as $key => $banner)
            <button class="glide__bullet" data-glide-dir="={{ $key }}"></button>
          @endforeach
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg width="36" height="36">
              <use xlink:href="#more"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg width="36" height="36">
              <use xlink:href="#more"></use>
            </svg>
          </button>
        </div>

        <div class="banner__content">
          <div class="banner__container container">
            <div class="main-page__board-content" data-content="main-page-board-{{ $locale }}">{!! $data['main-page-board-' . $locale] !!}</div>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="main-page__grid container">
      <x-histories :class="'main-page__grid-item'" :histories="$data['histories']" />

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-management.jpg')">
        <div class="content" data-content="main-page-management-{{ $locale }}">{!! $data['main-page-management-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-investors.jpg')">
        <div class="content" data-content="main-page-investors-{{ $locale }}">{!! $data['main-page-investors-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-contribution.jpg')">
        <div class="content" data-content="main-page-contribution-{{ $locale }}">{!! $data['main-page-contribution-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-opportunity.jpg')">
        <div style="max-width: 360px; width: 100%; margin: auto; z-index: 0">
          <div class="main-page__card-content" data-content="main-page-opportunity-{{ $locale }}">{!! $data['main-page-opportunity-' . $locale] !!}</div>
        </div>
      </section>
    </div>

    <section class="main-page__news">
      <div class="main-page__news-container container">
        <div class="content" data-content="main-page-news-{{ $locale }}">{!! $data['main-page-news-' . $locale] !!}</div>

        <div class="main-page__news-list">
          @foreach ($data['news'] as $news)
            <x-news-card :news="$news" />
          @endforeach
        </div>

        <a class="main-page__more-link" href="{{ route('news') }}">@lang('Читать все новости')</a>
      </div>
    </section>

    <section class="main-page__projects">
      <div class="container">
        <div class="content" data-content="main-page-projects-{{ $locale }}">{!! $data['main-page-projects-' . $locale] !!}</div>

        @if (count($data['projects']) != 0)
          <div class="main-page__projects-list glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                @foreach ($data['projects'] as $project)
                  <li class="glide__slide">
                    <a class="main-page__projects-item" @if ($project->url) href="{{ $project->url }}" target="_blank" @endif>
                      <img class="main-page__projects-img" src="{{ asset('files/projects/' . $project->logo) }}" width="165" height="112" alt="{{ $project->title }}" style="object-fit: contain">
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endif
        <a class="main-page__more-link" href="{{ route('projects') }}">@lang('Все наши проекты')</a>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/main/index.js') }}" type="module"></script>
@endsection
