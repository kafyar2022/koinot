@extends('layouts.master')

@section('title')
  @lang('Проекты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="projects-page">
    <div class="projects-page__board board" style="background-image: url('/files/img/projects{{ request('category') ? '-category' : '' }}-page-board.jpg')">
      <div class="board__container container">
        <div class="projects-page__board-content" data-content="projects{{ request('category') ? '-category' : '' }}-page-board-{{ $locale }}">
          <h1>Наши проекты</h1>
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
