@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-page">
    <div class="main-page__board board" style="background-image: url('files/img/main-page-board.jpg')">
      <div class="board__container container">
        <div class="main-page__board-content" data-content="main-page-board-{{ $locale }}">
          <h1>Группа компаний КОИНОТИ НАВ`</h1>
          <p>Верим, можем, создаем</p>
          <a href="/about/history">Подробнее</a>
        </div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <div class="main-page__grid container">
      <x-histories :class="'main-page__grid-item'" :histories="$data['histories']" />

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-management.jpg')">
        <div class="main-page__small-content" data-content="main-page-management-{{ $locale }}">
          <h2>Наш менеджмент</h2>
          <p>В нас сочетаются инновации и традиции.<br>
            Мы знак истинного качества, символ верности<br>
            и преданности своему делу, своему обществу и стране.</p>
          <a href="/about/management">Подробнее</a>
        </div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-investors.jpg')">
        <div class="main-page__small-content" data-content="main-page-investors-{{ $locale }}">
          <h2>Инвесторам</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p>
          <a href="/partnership/investors">Подробнее</a>
        </div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-contribution.jpg')">
        <div class="main-page__small-content" data-content="main-page-contribution-{{ $locale }}">
          <h2>Вклад в общество</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p>
          <a href="/contribution">Подробнее</a>
        </div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-opportunity.jpg')">
        <div class="main-page__card-content" data-content="main-page-opportunity-{{ $locale }}">
          <h2>Страна возможностей</h2>
          <p>Современный Таджикистан</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </section>
    </div>

    <section class="main-page__news">
      <div class="container">
        <div class="main-page__news-content" data-content="main-page-news-{{ $locale }}">
          <h2>Наши новости</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed<br>
            ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed<br>
            aliquam sed ullamcorper.</p>
          <a href="/news">Читать все новости</a>
        </div>

        <div class="main-page__news-list">
          @foreach ($data['news'] as $news)
            <x-news-card :news="$news" />
          @endforeach
        </div>
      </div>
    </section>

    <section class="main-page__projects">
      <div class="container">
        <div class="main-page__projects-content" data-content="main-page-projects-{{ $locale }}">
          <h2>Наши проекты</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed<br>
            ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed<br>
            aliquam sed ullamcorper.</p>
          <a href="/projects">Все наши проекты</a>
        </div>

        <div class="main-page__projects-list glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              @foreach ($data['partners'] as $partner)
                <li class="glide__slide">
                  <a class="main-page__projects-item" href="{{ $partner->url }}" target="_blank">
                    <img class="main-page__projects-img" src="{{ asset('files/projects/' . $partner->logo) }}" width="165" height="112" alt="{{ $partner->title }}">
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/main/index.js') }}" type="module"></script>
@endsection
