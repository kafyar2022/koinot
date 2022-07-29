@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="startups-page">
    <div class="startups-page__board board" style="background-image: linear-gradient(rgba(29, 29, 29, 0.7), rgba(29, 29, 29, 0.7)), url('/files/img/startups-page-board.jpg')">
      <div class="board__container container">
        <div class="startups-page__board-content" data-content="startups-page-board-{{ $locale }}">{!! $data['startups-page-board-' . $locale] !!}</div>
      </div>
    </div>

    <div class="container">
      <div class="startups-grid">
        <div class="content" data-content="startups-page-{{ $locale }}">{!! $data['startups-page-' . $locale] !!}
        </div>

        <form class="startups-page__form form" action="" method="">
          <div class="form__content">
            <div class="content" data-content="startups-page-form-{{ $locale }}">{!! $data['startups-page-form-' . $locale] !!}</div>
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
            <p class="form__use-term checkbox">
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

      <x-contacts-list :class="'startups-page__contacts-list'" :data="$data" />

      <div class="content" data-content="startups-page-connection-{{ $locale }}">{!! $data['startups-page-connection-' . $locale] !!}
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src=""></script>
@endsection
