@extends('layouts.master')

@section('title')
  @lang('Контакты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="contacts-page">
    <div class="board">
      <iframe style="width: 100%; height: 100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3119.109242450845!2d68.75148400706672!3d38.57733209183249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1658895390814!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container">
      <div class="contacts-page__content content">
        <h1>Головной офис</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>

      <x-contacts-list />

      <div class="contacts-page__content content">
        <h2>Связь с нами</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam<br>
          pellentesque facilisis egestas risus egestas sit gravida.</p>
      </div>
    </div>
  </main>
@endsection
