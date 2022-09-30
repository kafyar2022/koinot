@extends('layouts.master')

@section('title')
  @lang('Проекты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="projects-page">
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
            <div class="projects-page__board-content content" @if (request('category')) data-content="projects-{{ request('category') }}-page-board-{{ $locale }}" @else data-content="projects-page-board-{{ $locale }}" @endif>
              @if (request('category'))
                {!! $data['projects-' . request('category') . '-page-board-' . $locale] !!}
              @else
                {!! $data['projects-page-board-' . $locale] !!}
              @endif
            </div>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content" @if (request('category')) data-content="projects-{{ request('category') }}-page-{{ $locale }}" @else data-content="projects-page-{{ $locale }}" @endif>
          @if (request('category'))
            {!! $data['projects-' . request('category') . '-page-' . $locale] !!}
          @else
            {!! $data['projects-page-' . $locale] !!}
          @endif
        </div>
      </div>

      <div class="section-template__list" id="projects">
        @foreach ($data['projects'] as $project)
          <x-project-card :project="$project" />
        @endforeach
      </div>

      <div class="section-template__pagination">
        {{ $data['projects']->fragment('projects')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
