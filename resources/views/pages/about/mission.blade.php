@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="mission-page">
    <div class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/mission.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content" data-content="mission-page-board-{{ $locale }}">{!! $data['mission-page-board-' . $locale] !!}</div>
        <button
          class="watch-video"
          data-src="{{ asset('video/mission.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          @lang('Смотреть <br> видео')
        </button>
      </div>
    </div>

    <section class="mission-page__content container">
      <div class="content" data-content="mission-page-mission-{{ $locale }}">{!! $data['mission-page-mission-' . $locale] !!}</div>
    </section>

    <section class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/vision.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content" data-content="mission-page-vision-board-{{ $locale }}">{!! $data['mission-page-vision-board-' . $locale] !!}</div>
        <button
          class="watch-video"
          data-src="{{ asset('video/vision.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          @lang('Смотреть <br> видео')
        </button>
      </div>
    </section>

    <section class="mission-page__content container">
      <div class="content" data-content="mission-page-vision-{{ $locale }}">{!! $data['mission-page-vision-' . $locale] !!}</div>
    </section>

    <section class="mission-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/values-board.jpg')">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/values.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content" data-content="mission-page-values-board-{{ $locale }}">{!! $data['mission-page-values-board-' . $locale] !!}</div>
        <button
          class="watch-video"
          data-src="{{ asset('video/values.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          @lang('Смотреть <br> видео')
        </button>
      </div>
    </section>

    <section class="mission-page__content container">
      <div class="content" data-content="mission-page-values-{{ $locale }}">{!! $data['mission-page-values-' . $locale] !!}</div>
    </section>

    <ul class="mission-page__value-list container">
      <li class="mission-page__value-item" style="background-image: url('/files/img/value-1.jpg')">
        <div class="content" data-content="mission-page-value-1-{{ $locale }}">{!! $data['mission-page-value-1-' . $locale] !!}</div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/files/img/value-2.jpg')">
        <div class="content" data-content="mission-page-value-2-{{ $locale }}">{!! $data['mission-page-value-2-' . $locale] !!}</div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/files/img/value-3.jpg')">
        <div class="content" data-content="mission-page-value-3-{{ $locale }}">{!! $data['mission-page-value-3-' . $locale] !!}</div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/files/img/value-4.jpg')">
        <div class="content" data-content="mission-page-value-4-{{ $locale }}">{!! $data['mission-page-value-4-' . $locale] !!}</div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/files/img/value-5.jpg')">
        <div class="content" data-content="mission-page-value-5-{{ $locale }}">{!! $data['mission-page-value-5-' . $locale] !!}</div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/files/img/value-6.jpg')">
        <div class="content" data-content="mission-page-value-6-{{ $locale }}">{!! $data['mission-page-value-6-' . $locale] !!}</div>
      </li>
    </ul>
  </main>
@endsection
