@extends('admin.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb">
        <a href="{{ route('admin.histories') }}">История компании =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data->history ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data->history)
        <h1 class="page__title">Редактирование</h1>
      @else
        <h1 class="page__title">Добавление</h1>
      @endif
      <a class="page__link" data-action="submit">Сохранить</a>
    </div>

    <form class="form-dash" @if ($data->history) action="{{ route('histories.post', ['action' => 'update']) }}" @else action="{{ route('histories.post', ['action' => 'store']) }}" @endif method="post">
      @csrf
      @if ($data->history)
        <input type="hidden" name="id" value="{{ $data->history->id }}">
      @endif

      <label class="form-dash__element">
        <span class="form-dash__label">Годы*</span>
        <input
          class="form-dash__field"
          name="years"
          type="text"
          placeholder="1941-1945"
          value="{{ $data->history->years ?? '' }}"
          required
          data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element" style="grid-row: 2/5; grid-column: 1/4;">
        <span class="form-dash__label">История*</span>
        <textarea
          class="form-dash__field"
          name="history"
          cols="30"
          rows="10">
          {{ $data->history->history ?? '' }}
        </textarea>
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/pages/histories/show.js') }}" type="module"></script>
@endsection
