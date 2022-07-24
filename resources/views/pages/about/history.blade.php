@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="history-page">
    <div class="history-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/history-page-board.jpg')">
      <div class="board__container container">
        <div class="history-page__board-content" data-content="history-page-board-{{ $locale }}">
          <h2>Группа компаний<br>КОИНОТИ НАВ</h2>
          <p>Верим, можем, создаем</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </div>
    </div>

    <div class="history-page__grid container">
      <div class="history-page__grid-item history-page__content">
        <h1>О нас</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>

      <div class="history-page__grid-item">
        <x-histories :histories="$data['histories']" />
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/history.js') }}" type="module"></script>
@endsection
