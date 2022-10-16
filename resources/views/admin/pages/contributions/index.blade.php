@extends('admin.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Вклад в общество</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      <h1 class="page__title">Вклад в общество</h1>
      <a class="page__link" href="{{ route('admin.contributions', ['action' => 'create']) }}">Добавить</a>
    </div>

    @if (count($data->contributions) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Дата</th>
            <th>Заголовок</th>
            <th>Контент</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data->contributions as $key => $contribution)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">
                  {{ Carbon\Carbon::create($contribution->date)->isoFormat('DD.MM.YYYY') }}
                </div>
              </td>
              <td>
                <div style="min-width: max-content;">{{ $contribution->title }}</div>
              </td>
              <td>
                <div>{{ $contribution->content }}</div>
              </td>
              <td>
                <a href="{{ route('admin.contributions', ['action' => 'edit', 'contribution' => $contribution->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $contribution->id }}">Удалить</a>
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
  <script src="{{ asset('js/dashboard/pages/contributions/index.js') }}" type="module"></script>
@endsection
