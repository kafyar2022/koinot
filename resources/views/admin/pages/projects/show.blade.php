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
        <a href="{{ route('admin.projects') }}">Проекты =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">{{ $data->project ? 'Редактирование' : 'Добавление' }}</li>
    </ul>

    <div class="page__link-wrapper">
      @if ($data->project)
        <h1 class="page__title">Редактирование</h1>
      @else
        <h1 class="page__title">Добавление</h1>
      @endif
      <a class="page__link" data-action="submit">Сохранить</a>
    </div>

    <form class="form-dash" action="{{ $data->project ? route('projects.post', ['action' => 'update']) : route('projects.post', ['action' => 'store']) }}" method="post" enctype="multipart/form-data">
      @csrf

      @if ($data->project)
        <input type="hidden" name="id" value="{{ $data->project->id }}">
        <img
         style="grid-row: span 2; justify-self: center; object-fit: contain;"
          src="{{ asset($data->project->logo) }}" width="165" height="112"
           alt="{{ $data->project->title }}">
      @else
        <img style="grid-row: span 2; justify-self: center; object-fit: contain" width="165" height="112">
      @endif

      <label class="form-dash__element" style="grid-column-start: 1;">
        <span class="form-dash__label">Лого</span>
        <input class="visually-hidden" name="logo" type="file" accept="image/*">
        <input class="form-dash__field" type="text"
         placeholder="{{ $data->project && $data->project->logo ? $data->project->logo : 'Выберите файл' }}" value="{{ $data->project->logo ?? '' }}" readonly>
      </label>

      <label class="form-dash__element" style="grid-column-start: 2; grid-row-start: 1;">
        <span class="form-dash__label">Название*</span>
        <input class="form-dash__field" name="title" type="text" value="{{ $data->project->title ?? '' }}" required data-pristine-required-message="Объязательное поле">
      </label>

      <label class="form-dash__element">
        <span class="form-dash__label">Ссылка</span>
        <input class="form-dash__field" name="url" type="url" value="{{ $data->project->url ?? '' }}">
      </label>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/pages/projects/show.js') }}" type="module"></script>
@endsection
