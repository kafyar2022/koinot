@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-page">
    <div class="main-page__board board" style="background-image: url('files/img/main-page-board.jpg')">
      <div class="board__container container">
        <div class="main-page__board-content" data-content="main-page-board-{{ $locale }}">{!! $data['main-page-board-' . $locale] !!}</div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <div class="main-page__grid container">
      <x-histories :class="'main-page__grid-item'" />

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-management.jpg')">
        <div class="main-page__small-content" data-content="main-page-management-{{ $locale }}">{!! $data['main-page-management-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-investors.jpg')">
        <div class="main-page__small-content" data-content="main-page-investors-{{ $locale }}">{!! $data['main-page-investors-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-contribution.jpg')">
        <div class="main-page__small-content" data-content="main-page-contribution-{{ $locale }}">{!! $data['main-page-contribution-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-opportunity.jpg')">
        <div class="main-page__card-content" data-content="main-page-opportunity-{{ $locale }}">{!! $data['main-page-opportunity-' . $locale] !!}</div>
      </section>
    </div>

    <section class="main-page__news">
      <div class="container">
        <div class="main-page__news-content" data-content="main-page-news-{{ $locale }}">
          <h2>Наши новости</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p>
          <a href="#">Читать все новости</a>
        </div>


      </div>
    </section>
  </main>
@endsection
