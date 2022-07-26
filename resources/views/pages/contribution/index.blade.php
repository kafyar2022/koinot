@extends('layouts.master')

@section('title')
  @lang('Вклад в общество') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="contribution-page">
    <div class="contribution-page__board board" style="background-image: url('/files/img/contribution-page-board.jpg')">
      <div class="board__container container">
        <div class="contribution-page__board-content">
          <h1>Вклад в общество</h1>
          <p>Lorem ipsum dolor sit amet,<br>
            consectetur adipiscing elit.</p>
        </div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <section class="section-template container" id="contributions">
      <div class="section-template__content content">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
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
