@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="management-page">
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
            <div class="management-page__board-content" data-content="management-page-board-{{ $locale }}">{!! $data['management-page-board-' . $locale] !!}</div>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content" data-content="management-page-specialists-{{ $locale }}">{!! $data['management-page-specialists-' . $locale] !!}</div>
      </div>

      <ul class="section-template__list">
        @foreach ($data['specialists'] as $specialist)
          <li class="section-template__list-item">
            <x-specialist-card :specialist="$specialist" />
          </li>
        @endforeach
      </ul>
    </section>

    <section class="specialist-modal">
      <div class="specialist-modal__inner">
        <img class="specialist-modal__img" src="{{ asset('files/specialists/avatar-1.jpg') }}" width="680" height="400" alt="Мирзоев Сухроб">
        <h2 class="specialist-modal__title">Мирзоев Сухроб</h2>
        <p class="specialist-modal__position">Руководитель вымешленого отдела счастья</p>
        <div class="specialist-modal__content"></div>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/management.js') }}" type="module"></script>
@endsection
