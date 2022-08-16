@extends('dashboard.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная /</a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Специалисты</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      @if ($data['locale'] == 'ru')
        <h1 class="page__title">Специалисты на русском</h1>
        <a class="page__link" href="{{ route($route) }}?locale=en">Посмотреть на английском</a>
      @endif
      @if ($data['locale'] == 'en')
        <h1 class="page__title">Специалисты на английском</h1>
        <a class="page__link" href="{{ route($route) }}">Посмотреть на русском</a>
      @endif
      <a class="page__link" href="{{ route('dashboard.specialists', ['action' => 'create']) }}">Добавить</a>
    </div>

    @if (count($data['specialists']) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Имя и фамилия</th>
            <th>Позиция</th>
            <th>Инфо</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data['specialists'] as $key => $specialist)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">{{ $specialist->name . ' ' . $specialist->surname }}</div>
              </td>
              <td>
                <div style="min-width: max-content;">{{ $specialist->position }}</div>
              </td>
              <td>
                <div>{{ $specialist->about }}</div>
              </td>
              <td>
                <a href="{{ route('dashboard.specialists', ['action' => 'edit', 'specialist' => $specialist->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $specialist->id }}">Удалить</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    @else
      <p>Нет данных</p>
    @endif
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/pages/specialists/index.js') }}" type="module"></script>
@endsection
