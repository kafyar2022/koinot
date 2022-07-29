@extends('layouts.master')

@section('title')
  @lang('Вклад в общество') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="contribution-page">
    <div class="contribution-page__board board" style="background-image: url('/files/img/contribution-page-board.jpg')">
      <div class="board__container container">
        <div class="contribution-page__board-content" data-content="contribution-page-board-{{ $locale }}">{!! $data['contribution-page-board-' . $locale] !!}</div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <section class="section-template container" id="contributions">
      <div class="section-template__content">
        <div class="content" data-content="contribution-page-{{ $locale }}">{!! $data['contribution-page-' . $locale] !!}</div>
      </div>

      <ul class="section-template__list">
        @foreach ($data['contributions'] as $contribution)
          <li class="section-template__list-item">
            <x-contribution-card :contribution="$contribution" />
          </li>
        @endforeach
      </ul>

      <div class="section-template__pagination">
        {{ $data['contributions']->fragment('contributions')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
