@extends('layouts.master')

@section('title')
  @lang('Новости') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="news-page">
    <div class="news-page__board board" style="background-image: url('/files/img/news-page-board.jpg')">
      <div class="board__container container">
        <div class="news-page__board-content" data-content="news-page-board-{{ $locale }}">
          <h1>Новости</h1>
          <p>Lorem ipsum dolor sit amet,<br>
            consectetur adipiscing elit.</p>
        </div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <section class="section-template container">
      <div class="section-template__content content">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>

      <ul class="section-template__list" id="news">
        @foreach ($data['news'] as $news)
          <li class="section-template__list-item">
            <x-news-card :news="$news" />
          </li>
        @endforeach
      </ul>

      <div class="section-template__pagination">
        {{ $data['news']->fragment('news')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
