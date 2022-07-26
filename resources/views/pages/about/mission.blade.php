@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="mission-page">
    <div class="mission-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/mission-page-board.jpg')">
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h1>Наша миссия</h1>
          <p>Способствовать общественному<br>благополучию</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </div>
    </div>

    <section class="mission-page__content content container">
      <h2>Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
        pellentesque facilisis egestas risus egestas sit gravida.</p>
    </section>

    <section class="mission-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/vision-board.jpg')">
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Наше видение</h2>
          <p>Развиваясь инновационно и динамично<br>занять лидирующее положение в сферах деятельности</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </div>
    </section>

    <section class="mission-page__content content container">
      <h2>Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
        pellentesque facilisis egestas risus egestas sit gravida.</p>
    </section>

    <section class="mission-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/values-board.jpg')">
      <div class="board__container container">
        <div class="mission-page__board-content">
          <h2>Наши ценности</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
            Dignissim aliquam pellentesque facilisis egestas risus<br>
            segestas sit gravida.</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </div>
    </section>

    <section class="mission-page__content content container">
      <h2>Lorem Ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
        pellentesque facilisis egestas risus egestas sit gravida.</p>
    </section>

    <ul class="mission-page__value-list container">
      <li class="mission-page__value-item content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/img/value-1.jpg')">
        <h3>Уважение</h3>
        <p>Мы признаем ценность каждого человека в компании, уважаем его труд, время, свободу и собственное мнение.</p>
      </li>
      <li class="mission-page__value-item content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/img/value-2.jpg')">
        <h3>Самореализация</h3>
        <p>Мы создали внутри Компании атмосферу, способствующую самореализации каждого члена команды.</p>
      </li>
      <li class="mission-page__value-item content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/img/value-3.jpg')">
        <h3>Жизнерадостность</h3>
        <p>Мы оптимистичны, жизнерадостны, заряжаем энергией позитива. Мы знаем, что имеем полное право радовать.</p>
      </li>
      <li class="mission-page__value-item content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/img/value-4.jpg')">
        <h3>Здоровье</h3>
        <p>Здоровье – это главная ценность жизни. Здоровье – это состояние полного физического и социального благополучия.</p>
      </li>
      <li class="mission-page__value-item content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/img/value-5.jpg')">
        <h3>Командность</h3>
        <p>Наша сила в единстве и сплоченности, в осознанном предпочтении командных интересов.</p>
      </li>
      <li class="mission-page__value-item content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/img/value-6.jpg')">
        <h3>Профессионализм</h3>
        <p>Мы постоянно работаем над повышением своего профессионального мастерства, совершенствуя знания и умения.</p>
      </li>
    </ul>
  </main>
@endsection
