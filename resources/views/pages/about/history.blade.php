@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="history-page">
    <div class="history-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/about.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="board__container container">
        <div class="history-page__board-content" data-content="history-page-board-{{ $locale }}">{!! $data['history-page-board-' . $locale] !!}</div>
        <button
          class="watch-video"
          style="margin-left: 240px"
          data-src="{{ asset('video/about.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          @lang('Смотреть <br> видео')
        </button>
      </div>
    </div>

    <div class="history-page__grid container">
      <div class="content" data-content="history-page-content-{{ $locale }}">{!! $data['history-page-content-' . $locale] !!}</div>

      <div>
        <x-histories :histories="$data['histories']" />
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/history.js') }}" type="module"></script>
@endsection
