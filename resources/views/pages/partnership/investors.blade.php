@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="investors-page">
    <div class="investors-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/investors-page-board.jpg')">
      <div class="board__container container">
        <div class="investors-page__board-content" data-content="investors-page-board-{{ $locale }}">{!! $data['investors-page-board-' . $locale] !!}</div>
      </div>
    </div>

    <div class="container">
      <div class="investors-page__content">
        <div class="content" data-content="investors-page-about-{{ $locale }}">{!! $data['investors-page-about-' . $locale] !!}</div>
      </div>

      <x-contacts-list :data="$data" />

      <div class="investors-page__content">
        <div class="content" data-content="investors-page-connection-{{ $locale }}">{!! $data['investors-page-connection-' . $locale] !!}</div>
      </div>
    </div>
  </main>
@endsection
