@props(['contribution'])

<article
  class="contribution-card content"
  @if (count($contribution->images) > 0) style="background-image: url({{ asset($contribution->images[0]->thumb_src) }})" @endif>
  <h3 class="contribution-card__title">{{ $contribution->title }}</h3>

  <div class="contribution-card__content">{!! strip_tags($contribution->content) !!}</div>

  <a class="contribution-card__link" href="{{ route('contribution.show', $contribution->slug) }}">
    Подробнее
  </a>
</article>
