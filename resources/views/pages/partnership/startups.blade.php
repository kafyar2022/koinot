@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="startups-page">
    <div class="startups-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/startups-page-board.jpg')">
      <div class="board__container container">
        <div class="startups-page__board-content" data-content="startups-page-board-{{ $locale }}">
          <h1>Наше видение</h1>
          <p>Развиваясь инновационно и динамично<br>
            занять лидирующее положение в сферах деятельности</p>
          <a href="#">Смотреть<br>видео</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="startups-grid">
        <div class="content">
          <h2>Lorem Ipsum</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant condimentum aenean mauris, lacinia pharetra consequat, pharetra. Lectus venenatis, facilisi sed augue massa odio integer viverra a. Libero ut et, egestas felis. Duis penatibus eu, dictumst viverra eu, pharetra nam id. Rhoncus praesent ac sed leo a dolor. Et, nunc vulputate tortor in. Nunc tellus blandit nam eget cras. Ac aliquet phasellus rhoncus, dolor. Venenatis, odio sed lectus porta vitae nec bibendum. Tincidunt enim est, enim, nulla eget gravida. At egestas amet, lorem purus non. Amet nam duis diam fermentum lorem dignissim. Ullamcorper in donec nulla dignissim pretium sed aliquam.</p>
          <p></p>
          <p>Justo est odio sed faucibus commodo in. Risus lectus ipsum orci, duis ante sapien, amet libero, tellus. At ac lobortis arcu, diam. Lacus eu purus ultricies sed gravida lectus eget. Sed ipsum, tellus euismod condimentum. Nulla hendrerit tempor elementum eros elementum rhoncus tempor. Lectus amet urna turpis euismod nec velit fringilla vitae nulla. Egestas id cursus sollicitudin arcu, quis venenatis sit cursus. Laoreet interdum eu augue egestas viverra aliquet. Natoque sapien, elementum lobortis elementum. Amet, diam quisque nullam consectetur nibh nec egestas. Tempus sem tellus elit placerat enim. Integer faucibus sed convallis neque, pretium, eu.</p>
          <p></p>
          <p>Orci risus blandit in duis sagittis ipsum nulla massa nisl. Nisi, aliquet in gravida leo, amet fermentum. Convallis fermentum, fermentum aliquet nisl nisl semper purus tempor amet. Vestibulum vitae, nunc, ipsum, sed et orci cum at tellus. Interdum aliquam interdum tristique cras vel eros, dignissim sed tincidunt. Gravida vitae velit metus sem sed ut odio sed volutpat. Risus leo aliquam aliquam donec iaculis. Volutpat cras tellus nunc nisi sit blandit cursus aliquam nunc. Tristique varius fermentum adipiscing diam id integer molestie ipsum. Morbi nunc pretium sed tempor urna elementum. Sit gravida consectetur eu arcu. Eu, nisl, nec nulla tincidunt.</p>
          <p></p>
          <p>Nam nunc, habitant leo risus tortor mi imperdiet. Condimentum cursus velit egestas proin erat enim quis proin est.</p>
        </div>

        <form class="startups-page__form form" action="" method="">
          <div class="form__content">
            <h2>Форма обратной связи</h2>
            <p>Porem ipsum dolor sit amet, consectetur adipiscing elit. Ornare<br>
              vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet,<br>
              consectetur adipiscing elit. Ornare vitae sed aliquam sed</p>
          </div>

          <p class="form__element">
            <label class="form__label">
              <span class="visually-hidden">@lang('Ваше имя и фамилия')</span>
              <input class="form__field" name="name" type="text" placeholder="@lang('Ваше имя и фамилия')" autocomplete="off" required>
            </label>
          </p>
          <p class="form__element">
            <label class="form__label">
              <span class="visually-hidden">@lang('Контактный номер')</span>
              <input class="form__field" name="tel" type="tel" placeholder="@lang('Контактный номер')" autocomplete="off" required>
            </label>
          </p>
          <p class="form__element">
            <label class="form__label">
              <span class="visually-hidden">@lang('Ваша электронная почта')</span>
              <input class="form__field" name="email" type="email" placeholder="@lang('Ваша электронная почта')" autocomplete="off" required>
            </label>
          </p>
          <p class="form__element" style="margin-top: 8px;">
            <label class="form__label">
              <span class="visually-hidden">@lang('Тема обращения')</span>
              <input class="form__field" name="topic" type="text" placeholder="@lang('Тема обращения')" autocomplete="off" required>
            </label>
          </p>
          <p class="form__element">
            <label class="form__label">
              <span class="visually-hidden">@lang('Опишиет свой запрос')</span>
              <textarea class="form__field form__field--text" name="message" cols="30" rows="10" placeholder="@lang('Опишиет свой запрос')" autocomplete="off" required></textarea>
            </label>
          </p>

          <div class="form__bottom">
            <p class="checkbox">
              <label class="checkbox__label">
                <input class="checkbox__input visually-hidden" name="is_terms_accepted" type="checkbox">
                <span class="checkbox__icon">
                  <svg width="20" height="24">
                    <use xlink:href="#check"></use>
                  </svg>
                </span>
                @lang('Я принимаю<br>пользовательское соглашение')
              </label>
            </p>
            <button class="form__submit button" type="submit">@lang('Отправить')</button>
          </div>
        </form>
      </div>

      <x-contacts-list :class="'startups-page__contacts-list'" />

      <div class="content">
        <h2>Связь с нами</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src=""></script>
@endsection
