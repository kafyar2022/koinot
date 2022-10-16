@extends('layouts.master')

@section('title')
  Коиноти нав | Карьера
@endsection

@section('content')
  <main class="carrier-page">
    @if (count($data->banners) != 0)
      <div class="glide banner">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data->banners as $banner)
              <li class="glide__slide">
                <img
                  class="banner__img"
                  src="{{ $banner->img }}"
                  alt="Баннер"
                  width="1920"
                  height="540">
              </li>
            @endforeach
          </ul>
        </div>

        <div class="glide__bullets" data-glide-el="controls[nav]">
          @foreach ($data->banners as $key => $banner)
            <button class="glide__bullet" data-glide-dir="={{ $key }}"></button>
          @endforeach
        </div>

        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <svg width="36" height="36">
              <use xlink:href="#more"></use>
            </svg>
          </button>
          <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <svg width="36" height="36">
              <use xlink:href="#more"></use>
            </svg>
          </button>
        </div>

        <div class="banner__content">
          <div class="banner__container container">
            <h2 class="banner__title">Общекомандная цель</h2>
            <p class="banner__subtitle">Создать инновационную и динамично<br>
              развивающуюся команду</p>
          </div>
          <svg class="board__mask" width="1250" height="540">
            <use xlink:href="#board-mask"></use>
          </svg>
        </div>
      </div>
    @endif

    <div class="container">
      <section class="carrier-page__principles">
        <div class="carrier-page__principles-content">
          <div class="content">
            <h2>Главные качества сотрудника</h2>
            <p>«Идеальный сотрудник сегодня воспринимает себя как хранилище компетенций,<br>
              которые он должен сам отслеживать, развивать и улучшать» - Свен Бринкман</p>
          </div>
        </div>

        <ol class="carrier-page__principles-list">
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Уважение и честность</h3>
              <p>Уважаем себя и окружающих!<br>
                Честны, открыты и порядочны!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Мировозрение и счастье</h3>
              <p>Обладаем целостным мировоззрением!<br>
                Удовлетворены настоящим!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Оперативность и результативность</h3>
              <p>Действуем оперативно и грамотно!<br>
                Нацелены на эффективный результат!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Лидерство и командность</h3>
              <p>Я Лидер! Создаем лидеров!<br>
                Действуем на основе доверия и сотрудничества!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Осознанность и ответственность</h3>
              <p>Осознаем то, что мы делаем!<br>
                Несем ответственность за будущее!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Творчество и смелость</h3>
              <p>Вдохновленно со смыслом творим!
                Проявляем самостоятельность в принятии решений!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Дисциплина и логическое завершение</h3>
              <p>Свобода и ответственность в действиях!<br>
                Начатое доводим до логичного завершения!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Клиентоориентированность</h3>
              <p>Осознанно и целенаправленно действуем навстречу клиенту!
                Сервис ориентирован на Клиента!</p>
            </div>
          </li>
          <li class="carrier-page__principles-item">
            <div class="content">
              <h3>Конструктивная критика</h3>
              <p>Не боимся говорить о реальных вещах!<br>
                Исключаем и осуждаем интриги!</p>
            </div>
          </li>
        </ol>

      </section>

      <setion class="section-template">
        <div class="section-template__content">
          <div class="content">
            <h2>Наша формула успеха</h2>
            <p>Используя нашу формулу успеха и динамично совершенствуясь в четырёх измерениях,<br>
              мы становимся более зрелыми личностями и раскрываем свой потенциал.</p>
          </div>
        </div>

        <ul class="section-template__list" style="margin-bottom: 64px; grid-template-columns: 1fr">
          <li class="section-template__list-item carrier-page__formula" data-before="Ф" style="white-space: initial">
            <div class="content">
              <h3>ФУРП</h3>
              <p>Стабильное управление рабочими процессами. Постоянное совершенствование профессиональных навыков.<br>
                Самостоятельность и инициативность. Объективная оценка деятельности.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="Д" style="white-space: initial">
            <div class="content">
              <h3>ДИОН</h3>
              <p>Права и ответственность. Целеполагание и планирование. Организация и управление временем.<br>
                Высокая эффективность и продуктивность.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="В" style="white-space: initial">
            <div class="content">
              <h3>ВКД</h3>
              <p>Взаимное доверие и поддержка. Сплочённость и синергия. Высокая мотивация и вдохновение.<br>
                Эмоционально-позитивная атмосфера.</p>
            </div>
          </li>
        </ul>
        <ul class="section-template__list" style="margin-bottom: 64px; grid-template-columns: 1fr 1fr">
          <li class="section-template__list-item carrier-page__formula" data-before="Ф" style="white-space: initial">
            <div class="content">
              <h3>Физиологическое</h3>
              <p>Физические управления, питание,<br>
                управление стрессовыми ситуациями.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="И" style="white-space: initial">
            <div class="content">
              <h3>Интеллектуальное</h3>
              <p>Чтение, воображение,<br>
                планирование, письмо.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="Д" style="white-space: initial">
            <div class="content">
              <h3>Духовное</h3>
              <p>Прояснение ценностей и приверженность им,<br>
                учеба и размышления.</p>
            </div>
          </li>
          <li class="section-template__list-item carrier-page__formula" data-before="Э" style="white-space: initial">
            <div class="content">
              <h3>Эмоциональное</h3>
              <p>Служение, сопереживание, синергия,<br>
                внутренняя безопасность.</p>
            </div>
          </li>
        </ul>
      </setion>

      <section class="carrier-page__internship">
        <div class="content">
          <h2>Стажировка</h2>
          <p>Стажировка подразумевает освоение человеком трудовых навыков. Часто она имеет место, когда
            молодой сотрудник осваивает специальность, решая профессиональные задачи под руководством
            более опытного сотрудника компании. Она позволяет новичку окунуться в атмосферу трудовой
            деятельности. Даёт возможность научиться выстраивать взаимоотношения с коллегами в
            коллективе. Приучает брать на себя ответственность за принятые решения. В период есть
            возможность присмотреться к потенциальному сотруднику, оценить его адаптационные
            возможности, связанные с работой в конкретной компании, соответствие её ценностям.</p>

          <a href="{{ route('carrier.test') }}">Пройдите тестирование</a>
        </div>
      </section>
    </div>
  </main>
@endsection
