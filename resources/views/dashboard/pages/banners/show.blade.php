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
        <a href="{{ route('banners') }}">Баннеры</a>
      </li>
    </ul>

    <div class="page__link-wrapper">
      <a class="page__link" data-action="submit">Сохранить</a>
    </div>

    <form
      class="form-dash"
      action="{{ route('banners.post', ['action' => 'store']) }}"
      method="post"
      enctype="multipart/form-data">
      @csrf

      <input type="hidden" name="page" value="{{ $data['page'] }}">

      <div class="form-dash__element" style="grid-column: span 4;">
        <p>Баннеры (<span style="color: red">1920x540</span>)</p>

        <label class="form-dash__upload-images">
          Загрузить баннеры
          <input class="visually-hidden" name="images[]" type="file" accept=".png, .jpeg, .jpg" multiple>
        </label>

        <div class="form-dash__images">
          @if (count($data['banners']) > 0)
            @foreach ($data['banners'] as $banner)
              <div data-img="{{ $banner->id }}">
                <img src={{ asset('img/banners/' . $banner->img) }} width="240" height="100">
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </form>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/dashboard/pages/banners/show.js') }}" type="module"></script>
@endsection
