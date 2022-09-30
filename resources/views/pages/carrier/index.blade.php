@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="carrier-page">
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
            <div class="carrier-page__board-content" data-content="carrier-page-board-{{ $locale }}">{!! $data['carrier-page-board-' . $locale] !!}</div>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="container">
      <setion class="section-template">
        <div class="section-template__content">
          <div class="content" data-content="carrier-page-formula-{{ $locale }}">{!! $data['carrier-page-formula-' . $locale] !!}</div>
        </div>

        <ul class="section-template__list">
          <li class="section-template__list-item carrier-page__formula" data-before="Ф" data-text="carrier-page-formula-1-{{ $locale }}">{!! $data['carrier-page-formula-1-' . $locale] !!}</li>
          <li class="section-template__list-item carrier-page__formula" data-before="Д" data-text="carrier-page-formula-2-{{ $locale }}">{!! $data['carrier-page-formula-2-' . $locale] !!}</li>
          <li class="section-template__list-item carrier-page__formula" data-before="В" data-text="carrier-page-formula-3-{{ $locale }}">{!! $data['carrier-page-formula-3-' . $locale] !!}</li>
        </ul>
      </setion>

      <section class="carrier-page__principles">
        <div class="carrier-page__principles-content">
          <div class="content" data-content="carrier-page-principles-{{ $locale }}">{!! $data['carrier-page-principles-' . $locale] !!}</div>
        </div>

        <ol class="carrier-page__principles-list">
          <li class="carrier-page__principles-item" data-text="principle-1-{{ $locale }}">{{ $data['principle-1-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-2-{{ $locale }}">{{ $data['principle-2-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-3-{{ $locale }}">{{ $data['principle-3-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-4-{{ $locale }}">{{ $data['principle-4-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-5-{{ $locale }}">{{ $data['principle-5-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-6-{{ $locale }}">{{ $data['principle-6-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-7-{{ $locale }}">{{ $data['principle-7-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-8-{{ $locale }}">{{ $data['principle-8-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-9-{{ $locale }}">{{ $data['principle-9-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-10-{{ $locale }}">{{ $data['principle-10-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-11-{{ $locale }}">{{ $data['principle-11-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-12-{{ $locale }}">{{ $data['principle-12-' . $locale] }}</li>
          <li class="carrier-page__principles-item" data-text="principle-13-{{ $locale }}">{{ $data['principle-13-' . $locale] }}</li>
        </ol>
      </section>

      <section class="carrier-page__internship">
        <div class="content" data-content="carrier-page-internship-{{ $locale }}">{!! $data['carrier-page-internship-' . $locale] !!}</div>
      </section>
    </div>
  </main>
@endsection
