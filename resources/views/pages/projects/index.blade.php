@extends('layouts.master')

@section('title')
  Коиноти нав | Проекты
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
      </video>
      <div class="board__container container">
        <div class="projects-page__board-content">
          <h2>Наши проекты</h2>
          <p>Развитие - ключ к эволюции</p>
        </div>
        <button
          class="watch-video"
          style="margin-left: 240px"
          data-src="{{ asset('video/about.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Смотреть <br> видео
        </button>
      </div>
    </div>

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content">
          <h2>Наши проекты</h2>
          <p>Мы несём инновации в нашей ДНК. Чтобы продвигаться и быть конкурентоспособными,<br>
            мы должны анализировать рынок, развивать наши технологии, адаптироваться к новым<br>
            временам и потребностям наших клиентов.</p>
        </div>
      </div>

      <div class="section-template__list" id="projects">
        @foreach ($data->projects as $project)
          <x-project-card :project="$project" />
        @endforeach
      </div>
    </section>
  </main>
@endsection
