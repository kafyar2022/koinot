@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="test-page">
    <div class="container">
      <section class="carrier-stages">
        <div class="carrier-stages__content">
          <div class="content">
            <h2>Карьерные этапы</h2>
          </div>
        </div>

        <ul class="carrier-stages__list">
          <li class="carrier-stages__item">Стажировка и адаптация</li>
          <li class="carrier-stages__item">Специалист</li>
          <li class="carrier-stages__item">Старший специалист</li>
          <li class="carrier-stages__item">Ведущий специалист</li>
        </ul>

        <img
          class="carrier-stages__img board"
          src="{{ asset('img/carrier-stage.jpg') }}"
          width="1280"
          height="540"
          alt="Карьерные этапы">
      </section>

      <section class="test">
        <div class="test__content">
          <div class="content">
            <h2>Совершенствуйся с «КОИНОТИ НАВ» !</h2>
            <p>Пройди тест и стань частью нашей команды!</p>
          </div>
        </div>

        <div class="test__form form">
          <div class="form__content">
            <div class="content">
              <h2>Пройди тест и стань<br>
                частью нашей команды</h2>
            </div>
          </div>

          <div class="quiz-container"></div>
        </div>
      </section>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/carrier/test.js') }}" type="module"></script>
@endsection
