@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная /</a>
      </li>
      <li class="page__breadcrumb">
        <a href="{{ route('dashboard.specialists') }}">Специалисты /</a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['specialist'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['specialist'])
        <h1 class="page__title">Редактирование</h1>
      @else
        @if ($data['locale'] == 'ru')
          <h1 class="page__title">Добавление на русском</h1>
          <a class="page__link" href="/{{ request()->path() }}?locale=en">Добавить английский вариант</a>
        @endif
        @if ($data['locale'] == 'en')
          <h1 class="page__title">Добавление на английском</h1>
          <a class="page__link" href="/{{ request()->path() }}?locale=ru">Добавить русский вариант</a>
        @endif
      @endif
      <a class="page__link" data-action="submit">Сохранить</a>
    </div>

    <form class="form-dash" action="{{ $data['specialist'] ? route('specialists.post', ['action' => 'update']) : route('specialists.post', ['action' => 'store']) }}" method="post" enctype="multipart/form-data">
      @csrf

      @if ($data['specialist'])
        <input type="hidden" name="id" value="{{ $data['specialist']->id }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: cover;" src="{{ asset('files/specialists/thumbs/' . $data['specialist']->avatar) }}" width="240" alt="{{ $data['specialist']->name }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
        <img style="grid-row: span 3; justify-self: center; object-fit: cover;" width="220" height="220">
      @endif

      <label class="form-dash__element" style="grid-column-start: 1;">
        <span class="form-dash__label">Аватар</span>
        <input class="visually-hidden" name="avatar" type="file" accept=".png, .jpg, .jpeg">
        <input class="form-dash__field" type="text" placeholder="{{ $data['specialist'] && $data['specialist']->avatar ? $data['specialist']->avatar : 'Выберите файл' }}" value="{{ $data['specialist']->avatar ?? '' }}" readonly>
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Позиция*</span>
        <input class="form-dash__field" name="position" type="text" value="{{ $data['specialist']->position ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Имя*</span>
        <input class="form-dash__field" name="name" type="text" value="{{ $data['specialist']->name ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Фамилия*</span>
        <input class="form-dash__field" name="surname" type="text" value="{{ $data['specialist']->surname ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element" style="grid-column: 1/4;">
        <span class="form-dash__label">Инфо</span>
        <textarea class="form-dash__field" name="about" cols="30" rows="10">{{ $data['specialist']->about ?? '' }}</textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/pages/specialists/show.js') }}" type="module"></script>
@endsection
