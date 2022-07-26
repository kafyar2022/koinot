@extends('layouts.master')

@section('title')
  @lang('Вклад в общество') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="contribution-show-page">
    <div class="container">
      <time class="contribution-show-page__date" datetime="{{ $data['contribution']->created_at }}">{{ date_format($data['contribution']->created_at, 'Y.m.d') }}</time>
      <h1 class="contribution-show-page__title">{{ $data['contribution']->title }}</h1>
      <div class="content">{!! $data['contribution']->content !!}</div>

      <img class="contribution-show-page__img board" src="{{ asset('/files/contributions/' . $data['contribution']->images[0]->img) }}" width="1280" height="540" alt="{{ $data['contribution']->images[0]->description }}">

      <div class="contribution-show-page__gallery gallery">
        @foreach ($data['contribution']->images as $key => $image)
          <a class="gallery__item @if ($key > 6 || $key == 0) visually-hidden @endif" href="{{ asset('files/contributions/' . $image->img) }}" title="{{ $image->description }}" data-lcl-thumb="{{ asset('files/contributions/thumbs/' . $image->img) }}">
            <span class="gallery__thumb" style="background-image: url('/files/contributions/thumbs/{{ $image->img }}');">
              <svg class="gallery__icon" width="41" height="40">
                <use xlink:href="#image"></use>
              </svg>
            </span>
          </a>
        @endforeach
      </div>
    </div>

    <section class="section-template container">
      <div class="section-template__content content">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>

      <div class="section-template__list">
        @foreach ($data['last-contributions'] as $contribution)
          <x-contribution-card :contribution="$contribution" />
        @endforeach
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/contribution/show.js') }}" type="module"></script>
@endsection
