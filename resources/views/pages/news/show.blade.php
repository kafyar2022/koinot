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

      
    </div>
  </main>
@endsection
