@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="test-page">
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
            <div class="test-page__board-content" data-content="test-page-board-{{ $locale }}">{!! $data['test-page-board-' . $locale] !!}</div>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="container">
      <section class="carrier-stages">
        <div class="carrier-stages__content">
          <div class="content" data-content="test-page-stages-{{ $locale }}">{!! $data['test-page-stages-' . $locale] !!}</div>
        </div>

        <ul class="carrier-stages__list">
          <li class="carrier-stages__item" data-text="carrier-stage-1-{{ $locale }}">{!! $data['carrier-stage-1-' . $locale] !!}</li>
          <li class="carrier-stages__item" data-text="carrier-stage-2-{{ $locale }}">{!! $data['carrier-stage-2-' . $locale] !!}</li>
          <li class="carrier-stages__item" data-text="carrier-stage-3-{{ $locale }}">{!! $data['carrier-stage-3-' . $locale] !!}</li>
          <li class="carrier-stages__item" data-text="carrier-stage-4-{{ $locale }}">{!! $data['carrier-stage-4-' . $locale] !!}</li>
        </ul>

        <img class="carrier-stages__img board" src="{{ asset('files/img/carrier-stage.jpg') }}" width="1280" height="540" alt="Карьерные этапы">
        <div class="carrier-stages__gallery gallery">
          @foreach ($data['news']->images as $key => $image)
            <a class="gallery__item @if ($key > 6 || $key == 0) visually-hidden @endif" href="{{ asset('files/news/' . $image->img) }}" title="{{ $image->description }}" data-lcl-thumb="{{ asset('files/news/thumbs/' . $image->img) }}">
              <span class="gallery__thumb" style="background-image: url('/files/news/thumbs/{{ $image->img }}');">
                <svg class="gallery__icon" width="41" height="40">
                  <use xlink:href="#image"></use>
                </svg>
              </span>
            </a>
          @endforeach
        </div>
      </section>

      <section class="test">
        <div class="test__content">
          <div class="content" data-content="test-page-test-{{ $locale }}">{!! $data['test-page-test-' . $locale] !!}</div>
        </div>

        <div class="test__form form">
          <div class="form__content">
            <div class="content" data-content="test-page-form-{{ $locale }}">{!! $data['test-page-form-' . $locale] !!}</div>
          </div>

          <div class="quiz-container"></div>
        </div>
      </section>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/carrier/test.js') }}" type="module"></script>
@endsection
