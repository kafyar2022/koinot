@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="investors-page">
    <div class="investors-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/investors-page-board.jpg')">
      <div class="board__container container">
        <div class="investors-page__board-content" data-content="investors-page-board-{{ $locale }}">
          <h1>Страна<br>возможностей</h1>
          <p>Современный Таджикистан</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="investors-page__content content">
        <h2>О Таджикистане</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>

      <ul class="partnership-list">
        <li class="partnership-list__item">
          <h3 class="partnership-list__title">Инвесторам</h3>
          <a class="partnership-list__phone" href="tel:+99244000000">+992 (44) 000 000</a>
          <a class="partnership-list__email" href="mailto:invest@koinotinav.tj">invest@koinotinav.tj</a>
          <span class="partnership-list__icon">
            <svg width="16" height="19">
              <use xlink:href="#file"></use>
            </svg>
          </span>
        </li>
        <li class="partnership-list__item">
          <h3 class="partnership-list__title">Партнерство</h3>
          <a class="partnership-list__phone" href="tel:+99244000000">+992 (44) 000 000</a>
          <a class="partnership-list__email" href="mailto:partner@koinotinav.tj">partner@koinotinav.tj</a>
          <span class="partnership-list__icon">
            <svg width="18" height="18">
              <use xlink:href="#star"></use>
            </svg>
          </span>
        </li>
        <li class="partnership-list__item">
          <h3 class="partnership-list__title">Общие вопросы</h3>
          <a class="partnership-list__phone" href="tel:+99244000000">+992 (44) 000 000</a>
          <a class="partnership-list__email" href="mailto:info@koinotinav.tj">info@koinotinav.tj</a>
          <span class="partnership-list__icon">
            <svg width="16" height="17">
              <use xlink:href="#search"></use>
            </svg>
          </span>
        </li>
      </ul>

      <div class="investors-page__content content">
        <h2>Связь с нами</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>

      <a class="investors-page__link button" href="{{ route('projects') }}">@lang('Наши проекты')</a>
    </div>
  </main>
@endsection
