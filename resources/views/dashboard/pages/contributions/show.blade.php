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
        <a href="{{ route('dashboard.contributions') }}">Вклад в общество /</a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data['contribution'] ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data['contribution'])
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

    <form class="form-dash" action="{{ $data['contribution'] ? route('contributions.post', ['action' => 'update']) : route('contributions.post', ['action' => 'store']) }}" method="post" enctype="multipart/form-data">
      @csrf

      @if ($data['contribution'])
        <input type="hidden" name="id" value="{{ $data['contribution']->id }}">
      @else
        <input type="hidden" name="locale" value="{{ $data['locale'] }}">
      @endif

      <label class="form-dash__element" style="grid-column: span 3;">
        <span class="form-dash__label">Заголовок*</span>
        <input class="form-dash__field" name="title" type="text" value="{{ $data['contribution']->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element" style="grid-column: span 3;">
        <span class="form-dash__label">Контент</span>
        <textarea class="form-dash__field" name="content">{{ $data['contribution']->content ?? '' }}</textarea>
      </label>

      <label class="form-dash__element" style="grid-column: 4/5; grid-row: 1/2">
        <span class="form-dash__label">Дата</span>
        <input
          class="form-dash__field"
          name="date"
          type="datetime-local"
          value="{{ $data['contribution']->date ?? '' }}">
      </label>

      <div class="form-dash__element" style="grid-column: 4/5; grid-row: 2/6;">
        <span class="form-dash__label">Картинки</span>
        <label class="form-dash__upload-images">
          Загрузить фотки
          <input class="visually-hidden" name="images[]" type="file" accept=".png, .jpeg, .jpg" multiple>
        </label>
        <div class="form-dash__images">
          @if ($data['contribution'])
            @foreach ($data['contribution']->images as $image)
              <img src={{ asset('files/contributions/thumbs/' . $image->img) }} width="70" height="70">
            @endforeach
          @endif
        </div>
      </div>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/pages/news/show.js') }}" type="module"></script>
@endsection
