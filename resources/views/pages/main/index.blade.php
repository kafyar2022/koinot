@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-page">
    <div class="main-page__board board" style="background-image: url('files/img/main-page-board.jpg')">
      <div class="board__container container">
        <div id="edit" data-content="main-page-board-{{ $locale }}">{!! $data['main-page-board-' . $locale] !!}</div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <div class="main-page__grid container">
      <x-histories :class="'main-page__grid-item'" />

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-management.jpg')">
        <div data-content="main-page-management-{{ $locale }}">{!! $data['main-page-management-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-investors.jpg')">
        <div data-content="main-page-investors-{{ $locale }}">{!! $data['main-page-investors-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-contribution.jpg')">
        <div data-content="main-page-contribution-{{ $locale }}">{!! $data['main-page-contribution-' . $locale] !!}</div>
      </section>

      <section class="main-page__grid-item" style="background-image: url('files/img/main-page-opportunity.jpg')">
        <div data-content="main-page-opportunity-{{ $locale }}">{!! $data['main-page-opportunity-' . $locale] !!}</div>
      </section>
    </div>
  </main>
@endsection
