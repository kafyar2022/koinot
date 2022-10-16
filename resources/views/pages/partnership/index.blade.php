@extends('layouts.master')

@section('title')
  Коиноти нав | Партнерство
@endsection

@section('content')
  <main class="investors-page">
    <div class="investors-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/opportunity.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="investors-page__board-content">
          <h2>Страна <br>
            возможностей</h2>
          <p>Современный Таджикистан</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/opportunity.mp4') }}"
          onclick="window.playVideo(this)"
          style="margin-left: 240px"
          type="button">
          Смотреть <br> видео
        </button>
      </div>
    </div>

    <div class="container">
      <div class="investors-page__content">
        <div class="content">
          <h2>Послание инвесторам</h2>
          <p>Привлечение инвестиций в экономику Республики Таджикистан является одной из стратегических
            задач Группы компаний "КОИНОТИ НАВ". Своевременные и целенаправленные инвестиции - драйверы
            экономики, они напрямую влияют на создание новых рабочих мест, на уровень и качество жизни.
            Поэтому важно создавать комфортные условия для работы и благоприятный инвестиционный
            климат, направленный на повышение инвестиционной привлекательности Республики
            Таджикистан. Сегодня Группа компаний "КОИНОТИ НАВ" — это новое пространство возможностей
            и огромный потенциал для выгодного вложения инвестиций. Наша Группа компаний имеет
            благоприятную среду для ведения бизнеса, всесторонне защищает права инвесторов и
            инвестиционные стимулы.</p>
        </div>
      </div>

      <x-contacts-list />

      <div class="investors-page__content">
        <div class="content">
          <h2>Связь с нами</h2>
          <p>У вас возникли какие-либо вопросы или хотите что-то обсудить с нами?<br>
            Пожалуйста свяжитесь с нашими сотрудниками или отправьте нам сообщение<br>
            по электронной почте, и мы обязательно ответим вам в ближайшее время.</p>
          <a href="{{ route('projects') }}">Наши проекты</a>
        </div>
      </div>
    </div>
  </main>
@endsection
