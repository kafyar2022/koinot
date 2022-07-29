@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="management-page">
    <div class="management-page__board board" style="background-image: url('/files/img/management-page-board.jpg')">
      <div class="board__container container">
        <div class="management-page__board-content" data-content="management-page-board-{{ $locale }}">{!! $data['management-page-board-' . $locale] !!}</div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content" data-content="management-page-specialists-{{ $locale }}">{!! $data['management-page-specialists-' . $locale] !!}</div>
      </div>

      <ul class="section-template__list">
        @foreach ($data['specialists'] as $specialist)
          <li class="section-template__list-item">
            <x-specialist-card :specialist="$specialist" />
          </li>
        @endforeach
      </ul>
    </section>

    <section class="specialist-modal">
      <div class="specialist-modal__inner">
        <img class="specialist-modal__img" src="{{ asset('files/specialists/avatar-1.jpg') }}" width="680" height="400" alt="Мирзоев Сухроб">
        <h2 class="specialist-modal__title">Мирзоев Сухроб</h2>
        <p class="specialist-modal__position">Руководитель вымешленого отдела счастья</p>
        <div class="specialist-modal__content"></div>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/management.js') }}" type="module"></script>
@endsection
