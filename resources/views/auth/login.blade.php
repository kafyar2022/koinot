<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <title>Коиноти нав | Вход</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicon/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicon/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

  <link rel="stylesheet" href="{{ mix('css/style.min.css') }}">
</head>

<body class="page__body">
  @include('layouts.sprites')

  <main class="login-page">
    <form class="login-page__form form" action="{{ route('auth.check') }}" method="post">
      <div class="form__content">
        <h1>Вход</h1>
      </div>

      <div class="form__element">
        <label class="form__label">
          <span class="visually-hidden">Логин</span>
          <input class="form__field" name="login" type="text" placeholder="example@domain.com" autocomplete="off" required required data-pristine-required-message="Объязательное поле">
        </label>
        <div class="form__error form__error--login"></div>
      </div>
      <div class="form__element">
        <label class="form__label">
          <span class="visually-hidden">Пароль</span>
          <input class="form__field" name="password" type="password" placeholder="********" autocomplete="off" required required data-pristine-required-message="Объязательное поле">
        </label>
        <div class="form__error form__error--password"></div>
      </div>

      <div class="form__bottom">
        <button class="form__submit button" type="submit" disabled>Войти</button>
      </div>
    </form>
  </main>

  <script src="{{ asset('pristine/pristine.min.js') }}"></script>
  <script src="{{ asset('js/pages/auth/login.js') }}" type="module"></script>
</body>

</html>
