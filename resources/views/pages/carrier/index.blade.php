@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="carrier-page">
    <div class="carrier-page__board board" style="background-image: url('/files/img/carrier-page-board.jpg')">
      <div class="board__container container">
        <div class="carrier-page__board-content">
          <h1>Общекомандная цель</h1>
          <p>Создать инновационную и динамично<br>
            развивающуюся команду</p>
        </div>
      </div>

      <svg class="board__mask" width="1250" height="540">
        <use xlink:href="#board-mask"></use>
      </svg>
    </div>

    <div class="container">
      <setion class="section-template">
        <div class="section-template__content content">
          <h2>Наша формула успеха</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
            pellentesque facilisis egestas risus egestas sit gravida.</p>
        </div>

        <ul class="section-template__list">
          <li class="section-template__list-item carrier-page__formula" data-before="Ф">Высокая мотивация и вдохновение</li>
          <li class="section-template__list-item carrier-page__formula" data-before="Д">Высокая мотивация и вдохновение</li>
          <li class="section-template__list-item carrier-page__formula" data-before="В">Высокая мотивация и вдохновение</li>
        </ul>
      </setion>

      <section class="carrier-page__principles">
        <div class="carrier-page__principles-content content">
          <h2>Наши принципы</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed<br>
            aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing<br>
            elit. Ornare vitae sed aliquam sed ullamcorper.</p>
        </div>

        <ol class="carrier-page__principles-list">
          <li class="carrier-page__principles-item">Мы осознали - чтобы сделать мир лучше,<br>необходимо начать с себя!</li>
          <li class="carrier-page__principles-item">Мы преображаемся каждый день!<br>Мы стремимся быть лучше чем вчера!</li>
          <li class="carrier-page__principles-item">Мы принимаем<br>конструктивную критику!</li>
          <li class="carrier-page__principles-item">Мы за здоровый образ жизни!<br>Здоровый образ жизни - наше кредо!</li>
          <li class="carrier-page__principles-item">Нам достаточно один раз сказать - и мы<br>доведем дело до логического завершения!</li>
          <li class="carrier-page__principles-item">Для нас Большой успех - это сумма<br>ежедневных маленьких побед!</li>
          <li class="carrier-page__principles-item">Мы честны и открыты! Мы строим и поддерживаем<br>доверительные и крепкие отношения!</li>
          <li class="carrier-page__principles-item">Для нас завтра начинается сегодня,<br>сейчас, в данный момент!</li>
          <li class="carrier-page__principles-item">Мы важнее Я! Мы помогаем друг<br>другу добиваться успеха!</li>
          <li class="carrier-page__principles-item">Мы отдаем больше чтобы<br>получать больше!</li>
          <li class="carrier-page__principles-item">Мы дисциплинированны,<br>самостоятельны и инициативны!</li>
          <li class="carrier-page__principles-item">Мы оптимисты и мы верим в<br>себя!</li>
          <li class="carrier-page__principles-item">Мы трудолюбивы и динамичны!<br>Мы увлечены тем, что делаем!</li>
        </ol>
      </section>

      <section class="carrier-page__internship">
        <div class="content">
          <h2>Стажировка</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant condimentum aenean mauris, lacinia pharetra consequat, pharetra. Lectus venenatis, facilisi sed augue massa odio integer viverra a. Libero ut et, egestas felis. Duis penatibus eu, dictumst viverra eu, pharetra nam id. Rhoncus praesent ac sed leo a dolor. Et, nunc vulputate tortor in. Nunc tellus blandit nam eget cras. Ac aliquet phasellus rhoncus, dolor.</p><p></p>
          <p>Venenatis, odio sed lectus porta vitae nec bibendum. Tincidunt enim est, enim, nulla eget gravida. At egestas amet, lorem purus non. Amet nam duis diam fermentum lorem dignissim. Ullamcorper in donec nulla dignissim pretium sed aliquam.</p>
          <a href="/carrier/test">Пройдите тестирование</a>
        </div>
      </section>
    </div>
  </main>
@endsection
