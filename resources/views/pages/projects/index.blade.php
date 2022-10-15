@extends('layouts.master')

@section('title')
  @lang('Проекты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="projects-page">
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
        <div class="projects-page__board-content" data-content="projects-page-board-{{ $locale }}">{!! $data['projects-page-board-' . $locale] !!}</div>
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

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content" @if (request('category')) data-content="projects-{{ request('category') }}-page-{{ $locale }}" @else data-content="projects-page-{{ $locale }}" @endif>
          @if (request('category'))
            {!! $data['projects-' . request('category') . '-page-' . $locale] !!}
          @else
            {!! $data['projects-page-' . $locale] !!}
          @endif
        </div>
      </div>

      <div class="section-template__list" id="projects">
        @foreach ($data['projects'] as $project)
          <x-project-card :project="$project" />
        @endforeach
      </div>

      <div class="section-template__pagination">
        {{ $data['projects']->fragment('projects')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
