@extends('admin.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Проекты</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      <h1 class="page__title">Проекты</h1>
      <a class="page__link" href="{{ route('admin.projects', ['action' => 'create']) }}">Добавить</a>
    </div>

    @if (count($data->projects) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Название</th>
            <th>Категория</th>
            <th>Ссылка</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data->projects as $key => $project)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">{{ $project->title }}</div>
              </td>
              <td>
                <div style="min-width: max-content;">{{ $project->by_us ? 'Реализованные нами' : 'При нашей поддержке' }}</div>
              </td>
              <td>
                <div>{{ $project->url }}</div>
              </td>
              <td>
                <a href="{{ route('admin.projects', ['action' => 'edit', 'project' => $project->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $project->id }}">Удалить</a>
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
  <script src="{{ asset('js/dashboard/pages/projects/index.js') }}" type="module"></script>
@endsection
