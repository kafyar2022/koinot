@extends('layouts.master')

@section('title')
  @lang('Новости') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="news-page">
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
            <div class="news-page__board-content" data-content="news-page-board-{{ $locale }}">{!! $data['news-page-board-' . $locale] !!}</div>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif
    {{-- <div class="news-page__board board" style="background-image: url('/files/img/news-page-board.jpg')">
      <div class="board__container container">
        <div class="news-page__board-content" data-content="news-page-board-{{ $locale }}">{!! $data['news-page-board-' . $locale] !!}</div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div> --}}

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content" data-content="news-page-content-{{ $locale }}">{!! $data['news-page-content-' . $locale] !!}</div>
      </div>

      <ul class="section-template__list" id="news">
        @foreach ($data['news'] as $news)
          <li class="section-template__list-item">
            <x-news-card :news="$news" />
          </li>
        @endforeach
      </ul>

      <div class="section-template__pagination">
        {{ $data['news']->fragment('news')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
