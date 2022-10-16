@extends('layouts.master')

@section('title')
  Коиноти нав | Вклад в общество
@endsection

@section('content')
  <main class="contribution-show-page">
    <div class="container">
      <time
        class="contribution-show-page__date"
        datetime="{{ $data->contribution->date }}">
        {{ Carbon\Carbon::create($data->contribution->date)->isoFormat('DD.MM.YYYY') }}
      </time>

      <h1 class="contribution-show-page__title">{{ $data->contribution->title }}</h1>
      <div class="content">{!! $data->contribution->content !!}</div>

      @if (count($data->contribution->images) > 0)
        <img class="contribution-show-page__img board"
          src="{{ asset($data->contribution->images[0]->src) }}"
          width="1280"
          height="540"
          alt="{{ $data->contribution->title }}">
      @endif

      <div class="contribution-show-page__gallery gallery">
        @foreach ($data->contribution->images as $key => $image)
          <a
            class="gallery__item @if ($key > 6 || $key == 0) visually-hidden @endif"
            href="{{ asset($image->src) }}"
            data-lcl-thumb="{{ asset($image->thumb_src) }}">
            <span class="gallery__thumb" style="background-image: url('{{ asset($image->thumb_src) }}')">
              <svg class="gallery__icon" width="41" height="40">
                <use xlink:href="#image"></use>
              </svg>
            </span>
          </a>
        @endforeach
      </div>
    </div>

    <section class="section-template container">
      <div class="section-template__content">
        <div class="content">
          <h2>Вклад в общество посредством социальной помощи</h2>
          <p>Группа компаний «КОИНОТИ НАВ» уделяет особое внимание социальной поддержке.<br>
            Задача каждого сотрудника - в любой ситуации действовать как добросовестный<br>
            гражданин и уважать общество.</p>
          <p></p>
          <p>В поддержку интересов населения мы нередко по собственной инициативе<br>
            осуществляем проекты по улучшению качества жизни.</p>
        </div>
      </div>

      <div class="section-template__list">
        @foreach ($data->lastContributions as $contribution)
          <x-contribution-card :contribution="$contribution" />
        @endforeach
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/contribution/show.js') }}" type="module"></script>
@endsection
