@extends('layouts.master')

@section('title')
  Коиноти нав | Миссия, Видение, Ценности
@endsection

@section('content')
  <main class="mission-page">
    <div class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/mission.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Наша Миссия</h2>
          <p>Способствовать общественному<br>
            благополучию</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/mission.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Смотреть <br> видео
        </button>
      </div>
    </div>

    <section class="mission-page__content container">
      <div class="content">
        <h2>Миссия</h2>
        <p>Всячески и всесторонне способствовать общественному благополучию через<br>
          устойчивое развитие компаний "КОИНОТИ НАВ" и социальную ответственность,<br>
          ориентируясь на умножение долгосрочных социальных и экономических благ</p>
      </div>
    </section>

    <section class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/vision.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Наше Видение</h2>
          <p>Развиваясь инновационно и динамично<br>
            занять лидирующее положение в сферах деятельности</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/vision.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Смотреть <br> видео
        </button>
      </div>
    </section>

    <section class="mission-page__content container">
      <div class="content">
        <h2>Видение</h2>
        <p>Развиваться инновационно и динамично: быть в поиске, использовать новые способы и
          инструменты для повышения эффективности и продуктивности, быть всегда
          конкурентоспособным, развивать текущие и охватывать новые сферы деятельности,
          позиционировать себя на международном рынке в долгосрочном плане. Быть гибкими
          в условиях изменчивости внешней и внутренней среды, предвидеть грядущие
          изменения и быть подготовленными.</p>
      </div>
    </section>

    <section class="mission-page__board board">
      <video
        class="video-card"
        width="320"
        height="240"
        autoplay
        loop
        muted>
        <source src="{{ asset('video/trimmed/values.mp4') }}" type="video/mp4">
      </video>
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Наши Ценности</h2>
          <p>Система исповедуемых сотрудниками внутренних<br>
            духовных основ и традиций, деловых и нравственных<br>
            принципов</p>
        </div>
        <button
          class="watch-video"
          data-src="{{ asset('video/values.mp4') }}"
          onclick="window.playVideo(this)"
          type="button">
          Смотреть <br> видео
        </button>
      </div>
    </section>

    <section class="mission-page__content container">
      <div class="content">
        <h2>Ценности</h2>
        <p>Группа Компаний "КОИНОТИ НАВ" – это система исповедуемых сотрудниками внутренних<br>
          духовных основ и традиций, деловых и нравственных принципов, которые отражают<br>
          индивидуальность и создают фундамент для эффективной реализации стратегии.</p>
      </div>
    </section>

    <ul class="mission-page__value-list container">
      <li class="mission-page__value-item" style="background-image: url('/img/value-1.jpg')">
        <div class="content">
          <h3>Уважение</h3>
          <p>Мы признаем ценность каждого человека в компании, уважаем его труд, время, свободу
            и собственное мнение. Уважение к нашим деловым партнерам дает нам возможность успешно
            сотрудничать, сохраняя доверие и открытость.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-2.jpg')">
        <div class="content">
          <h3>Самореализация</h3>
          <p>Мы создали внутри Компании атмосферу, способствующую самореализации каждого члена
            команды. Мы поддерживаем стремление команды к инновациям и креативности. Мы
            получаем удовольствие от своей работы, мы творцы, мы новаторы в своем деле.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-3.jpg')">
        <div class="content">
          <h3>Жизнерадостность</h3>
          <p>Мы оптимистичны, жизнерадостны, заряжаем энергией позитива. Мы знаем, что имеем
            полное и безоговорочное право радовать себя и радоваться жизни несмотря ни на что,
            а иногда даже и вопреки!</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-4.jpg')">
        <div class="content">
          <h3>Здоровье</h3>
          <p>Мы понимаем, что здоровье – это главная ценность жизни. Здоровье – это состояние
            полного физического и социального благополучия, эмоциональной гармонии.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-5.jpg')">
        <div class="content">
          <h3>Командность</h3>
          <p>Слова «Мы команда»! – порождаются на основе нашей философии Дружбы. Мы понимаем,
            что наша сила в единстве и сплоченности, в осознанном предпочтении командных
            интересов, в приоритете над личными. Мы взаимодействуя в команде, добиваемся
            успехов.</p>
        </div>
      </li>
      <li class="mission-page__value-item" style="background-image: url('/img/value-6.jpg')">
        <div class="content">
          <h3>Профессионализм</h3>
          <p>Мы постоянно работаем над повышением своего профессионального мастерства,
            совершенствуя знания и умения, которые обеспечивают нам оптимальную творческую
            кондицию и способности к активному изучению современных тенденций.</p>
        </div>
      </li>
    </ul>
  </main>
@endsection
