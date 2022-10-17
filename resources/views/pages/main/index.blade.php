@extends('layouts.master')

@section('title')
  Коиноти нав | Главная
@endsection

@section('content')
  <main class="main-page">
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
            <h2 class="banner__title">
              Группа компаний <br>
              "КОИНОТИ НАВ"
            </h2>
            <a class="banner__link button" href="{{ route('about', 'history') }}">
              Подробнее
            </a>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="main-page__grid container">
      <x-histories :class="'main-page__grid-item'" :histories="$data->histories" />

      <section
        class="main-page__grid-item"
        style="background-image: url('img/main-page-management.jpg')">
        <div class="content" style="margin-bottom: 40px">
          <h3>Наш менеджмент</h3>
          <p>В нас сочетаются инновации и традиции. Мы знак истинного качества, символ верности
            и преданности своему делу, своему обществу и стране.</p>
        </div>
      </section>

      <section
        class="main-page__grid-item"
        style="background-image: url('img/main-page-investors.jpg')">
        <div class="content">
          <h3>Инвесторам</h3>
          <p>Привлечение инвестиций в экономику Республики Таджикистан является одной из
            стратегических целей развития Группы компаний "КОИНОТИ НАВ".</p>

          <a href="{{ route('partnership') }}">Подробнее</a>
        </div>
      </section>

      <section
        class="main-page__grid-item"
        style="background-image: url('img/main-page-contribution.jpg')">
        <div class="content">
          <h3>Вклад в общество</h3>
          <p>Группа компаний "КОИНОТИ НАВ" - социально-ответственный холдинг, который
            поддерживает национальные цели развития страны.</p>

          <a href="{{ route('contribution') }}">Подробнее</a>
        </div>
      </section>

      <section class="main-page__grid-item">
        <video
          class="video-card"
          style="border-radius: 8px"
          width="320"
          height="240"
          autoplay
          loop
          muted>
          <source src="{{ asset('video/trimmed/opportunity.mp4') }}" type="video/mp4">
        </video>
        <div style="max-width: 360px; width: 100%; margin: auto; z-index: 0">
          <div class="main-page__card-content content">
            <h2>Страна возможностей</h2>
            <p>Современный Таджикистан</p>
          </div>
          <button
            class="watch-video"
            style="margin-left: auto"
            data-src="{{ asset('video/opportunity.mp4') }}"
            onclick="window.playVideo(this)"
            type="button">
            Смотреть <br> видео
          </button>
        </div>
      </section>
    </div>

    <section class="main-page__news">
      <div class="main-page__news-container container">
        <div class="content">
          <h2>Наши новости</h2>
          <p>Новости, история развития и интересные события из нашей жизни, <br>
            которыми всегда приятно поделиться.</p>
        </div>

        <div class="main-page__news-list">
          @foreach ($data->news as $news)
            <x-news-card :news="$news" />
          @endforeach
        </div>

        <a class="main-page__more-link" href="{{ route('news') }}">Читать все новости</a>
      </div>
    </section>

    <section class="main-page__projects">
      <div class="container">
        <div class="content">
          <h2>Наши проекты</h2>
          <p>Создание новых рабочих мест, реализация инфраструктурных проектов,<br>
            прямые инвестиции, то, что мы делаем с самого первого дня основания<br>
            Группы компаний "КОИНОТИ НАВ".</p>
        </div>

        @if (count($data->projects) != 0)
          <div class="main-page__projects-list glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                @foreach ($data->projects as $project)
                  <li class="glide__slide">
                    <a
                      class="main-page__projects-item"
                      href="{{ $project->url }}" target="_blank">
                      <img
                        class="main-page__projects-img"
                        src="{{ $project->logo }}"
                        width="165"
                        height="112"
                        alt="{{ $project->title }}"
                        style="object-fit: contain">
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endif

        <a class="main-page__more-link" href="{{ route('projects') }}">Все наши проекты</a>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/main/index.js') }}" type="module"></script>
@endsection
