@props(['news'])

<article class="news-card">
  <img class="news-card__img" src="{{ asset('files/news/' . $news->images[0]->img) }}" width="360" height="180" alt="{{ $news->images[0]->description }}">
  <time class="news-card__date" datetime="{{ $news->created_at }}">{{ date_format($news->created_at, 'Y.m.d') }}</time>
  <h3 class="news-card__title">{{ $news->title }}</h3>
  <p class="news-card__description">{!! $news->content !!}</p>
  <a class="news-card__link" href="{{ route('news.show', $news->slug) }}">@lang('Подробнее')</a>
</article>
