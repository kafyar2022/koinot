@extends('admin.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Новости</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      <h1 class="page__title">Новости</h1>
      <a class="page__link" href="{{ route('admin.news', ['action' => 'create']) }}">Добавить</a>
    </div>

    @if (count($data->news) != 0)
      <table class="page__table">
        <thead>
          <tr>
            <th>№</th>
            <th>Дата</th>
            <th>Заголовок</th>
            <th>Новость</th>
            <th colspan="2">Действия</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($data->news as $key => $news)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>
                <div style="min-width: max-content;">
                  {{ Carbon\Carbon::create($news->date)->isoFormat('DD.MM.YYYY') }}
                </div>
              </td>
              <td>
                <div style="min-width: max-content;">{{ $news->title }}</div>
              </td>
              <td>
                <div>{{ $news->content }}</div>
              </td>
              <td>
                <a href="{{ route('admin.news', ['action' => 'edit', 'news' => $news->id]) }}">Редактировать</a>
              </td>
              <td>
                <a data-action="delete" data-id="{{ $news->id }}">Удалить</a>
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
  <script src="{{ asset('js/dashboard/pages/news/index.js') }}" type="module"></script>
@endsection
