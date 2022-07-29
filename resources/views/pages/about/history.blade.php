@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="history-page">
    <div class="history-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/history-page-board.jpg')">
      <div class="board__container container">
        <div class="history-page__board-content" data-content="history-page-board-{{ $locale }}">{!! $data['history-page-board-' . $locale] !!}</div>
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
