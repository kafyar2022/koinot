@extends('layouts.master')

@section('title')
  @lang('Проекты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="projects-page">
    <div class="projects-page__board board" style="background-image: url('/files/img/projects{{ request('category') ? '-category' : '' }}-page-board.jpg')">
      <div class="board__container container">
        <div class="projects-page__board-content content" data-content="@if (request('category'))projects-{{ request('category') }}-page-board-{{ $locale }}@else projects-page-board-{{ $locale }}@endif">
          @if (request('category'))
            {!! $data['projects-' . request('category') . '-page-board-' . $locale] !!}
          @else
            {!! $data['projects-page-board-' . $locale] !!}
          @endif
        </div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content" data-content="@if (request('category'))projects-{{ request('category') }}-page-{{ $locale }}@else projects-page-{{ $locale }}@endif">
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
