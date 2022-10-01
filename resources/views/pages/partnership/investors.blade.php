@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="investors-page">
    <div class="investors-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/opportunity.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="board__container container">
        <div class="investors-page__board-content" data-content="investors-page-board-{{ $locale }}">{!! $data['investors-page-board-' . $locale] !!}</div>
        <button
          class="watch-video"
          data-src="{{ asset('video/mission.mp4') }}"
          onclick="window.playVideo(this)"
          style="margin-left: 240px"
          type="button">
          @lang('Смотреть <br> видео')
        </button>
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
