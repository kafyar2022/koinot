@extends('layouts.master')

@section('title')
  Коиноти нав | Сфера деятельности
@endsection

@section('content')
  <main class="history-page">
    <div class="history-page__board board">
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
        <div class="history-page__board-content">
          <h2>Группа компаний <br>
            "КОИНОТИ НАВ"</h2>
        </div>
        <button
          class="watch-video"
          style="margin-left: 240px"
          data-src="{{ asset('video/opportunity.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Смотреть <br> видео
        </button>
      </div>
    </div>

    <div class="history-page__grid container">
      <div class="content">
        <h2>О нас</h2>
        <p>Группа компаний "КОИНОТИ НАВ" образована в 1991 году. Группа компаний сегодня
          объединяет ряд производственных и торговых предприятий, работающих в области
          поставок и реализации товаров народного потребления, лекарственных препаратов
          и продуктов питания, обслуживания и продажи автомобилей, повышения образованности
          и квалификации специалистов. Главная Миссия Группы компаний "КОИНОТИ НАВ" – это
          общественное благополучие. Наша гордость – сотрудники. К подбору персонала
          относимся с огромной ответственностью. Именно поэтому холдинг состоит из:
          профессиональных и компетентных специалистов, высококвалифицированных менеджеров
          и управленцев. Мы постоянно растем и развиваемся, ставим перед собой амбициозные
          цели, которые умеем эффективно достигать.</p>
      </div>

      <div>
        <x-histories :histories="$data->histories" />
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/history.js') }}" type="module"></script>
@endsection
