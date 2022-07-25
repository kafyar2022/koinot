@extends('layouts.master')

@section('title')
  @lang('Новости') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="news-show-page">
    <img class="board" src="{{ asset('/files/news/' . $data['news']->images[0]->img) }}" width="1280" height="540" alt="{{ $data['news']->images[0]->description }}">

    <div class="news-show-page__container container">
      <time class="news-show-page__date" datetime="{{ $data['news']->created_at }}">{{ date_format($data['news']->created_at, 'Y.m.d') }}</time>
      <h1 class="news-show-page__title">{{ $data['news']->title }}</h1>

      <div class="news-show-page__content">{!! $data['news']->content !!}</div>

      <div class="news-show-page__gallery gallery">
        @foreach ($data['news']->images as $key => $image)
          <a class="gallery__item @if ($key > 6 || $key == 0) visually-hidden @endif" href="{{ asset('files/news/' . $image->img) }}" title="{{ $image->description }}" data-lcl-thumb="{{ asset('files/news/thumbs/' . $image->img) }}">
            <span class="gallery__thumb" style="background-image: url('/files/news/thumbs/{{ $image->img }}');">
              <svg class="gallery__icon" width="41" height="40">
                <use xlink:href="#image"></use>
              </svg>
            </span>
          </a>
        @endforeach
      </div>
    </div>

    <section class="news-show-page__last-news container">
      <div class="news-show-page__last-news-content">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>

      <div class="news-show-page__last-news-list">
        @foreach ($data['last-news'] as $news)
          <x-news-card :news="$news" />
        @endforeach
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/news/show.js') }}"></script>
@endsection
