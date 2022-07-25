@props(['specialist'])

<figure class="specialist-card">
  <figcaption class="specialist-card__name">{{ $specialist->surname }}<br>{{ $specialist->name }}</figcaption>
  <img class="specialist-card__avatar" src="{{ asset('files/specialists/thumbs/' . $specialist->avatar) }}" width="260" height="330" alt="{{ $specialist->name }}">
  <p class="specialist-card__position">{{ $specialist->position->title }}</p>
  <button class="specialist-card__button button" data-specialist="{{ json_encode($specialist) }}" type="button">@lang('Подробнее')</button>
</figure>
