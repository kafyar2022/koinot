@extends('layouts.master')

@section('title')
  Коиноти нав | Вклад в общество
@endsection

@section('content')
  <main class="contribution-page">
    @if (count($data->banners) != 0)
      <div class="glide banner">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data->banners as $banner)
              <li class="glide__slide">
                <img
                  class="banner__img"
                  src="{{ $banner->img }}"
                  alt="Баннер"
                  width="1920"
                  height="540">
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__bullets" data-glide-el="controls[nav]">
          @foreach ($data->banners as $key => $banner)
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
            <h2 class="banner__title">Вклад в общество</h2>
            <p class="banner__subtitle">Мы - социально-ответственный холдинг,<br>
              поддерживающий национальные цели<br>
              развития страны.</p>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <section class="section-template container" id="contributions">
      <div class="section-template__content">
        <div class="content">
          <h2>Вклад в общество</h2>
          <p>Группа компаний "КОИНОТИ НАВ" - социально-ответственный холдинг, который поддерживает
            национальные цели развития страны. "КОИНОТИ НАВ" постоянно стремится оказывать
            положительное влияние на качество жизни, как общества в целом, так и отдельных
            социальных групп, не ограничиваясь разовыми мероприятиями. Мы помогаем не только
            людям, оказавшимся в сложной жизненной ситуации, но и тем, кто ищет поддержки в
            своих благих начинаний. В Группе компаний "КОИНОТИ НАВ" работают инициативные и
            ответственные люди, компетентные организаторы, всегда доводящие замысел до
            логического результата. </p>
        </div>
      </div>

      <ul class="section-template__list">
        @foreach ($data->contributions as $contribution)
          <li class="section-template__list-item">
            <x-contribution-card :contribution="$contribution" />
          </li>
        @endforeach
      </ul>

      <div class="section-template__pagination">
        {{ $data->contributions->fragment('contributions')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
