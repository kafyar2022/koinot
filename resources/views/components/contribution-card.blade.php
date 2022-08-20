@props(['contribution'])

<article class="contribution-card content" style="background-image: linear-gradient(0deg, rgba(60, 50, 76, 0.85), rgba(60, 50, 76, 0.85)), url('/files/contributions/{{ $contribution->images[0]->img }}')">
  <h3 class="contribution-card__title">{{ $contribution->title }}</h3>
  <div class="contribution-card__content">{{ strip_tags($contribution->content) }}</div>
  <a class="contribution-card__link" href="{{ route('contribution.show', $contribution->slug) }}">@lang('Подробнее')</a>
</article>
