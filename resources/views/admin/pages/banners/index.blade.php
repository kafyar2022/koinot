@extends('admin.layouts.master')

@section('content')
  <main class="page__content">
    <div class="modal modal--fail {{ session()->has('fail') ? '' : 'modal--hidden' }}">{{ session()->get('fail') }}</div>
    <div class="modal modal--success {{ session()->has('success') ? '' : 'modal--hidden' }}">{{ session()->get('success') }}</div>

    <ul class="page__breadcrumbs">
      <li class="page__breadcrumb">
        <a href="{{ route('main') }}">Главная =></a>
      </li>
      <li class="page__breadcrumb page__breadcrumb--current">Баннеры</li>
    </ul>

    <div class="page__link-wrapper" style="padding: 0 2px">
      <h1 class="page__title">Баннеры</h1>
    </div>

    <table class="page__table">
      <thead>
        <tr>
          <th>№</th>
          <th>Страницы</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>
            <a href="{{ route('admin.banners', ['action' => 'show', 'page' => 'main']) }}">Главная страница</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            <a href="{{ route('admin.banners', ['action' => 'show', 'page' => 'about.management']) }}">Менеджмент</a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            <a href="{{ route('admin.banners', ['action' => 'show', 'page' => 'news']) }}">Новости</a>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>
            <a href="{{ route('admin.banners', ['action' => 'show', 'page' => 'projects']) }}">Проекты</a>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>
            <a href="{{ route('admin.banners', ['action' => 'show', 'page' => 'contributions']) }}">Вклад в общество</a>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>
            <a href="{{ route('admin.banners', ['action' => 'show', 'page' => 'carrier']) }}">Карьера</a>
          </td>
        </tr>
      </tbody>
    </table>

  </main>
@endsection
