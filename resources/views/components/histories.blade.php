@props([
    'class' => '',
    'histories'
])


<section class="glide history-glide history-glide--closed-filter {{ $class }}" style="background-image: url('../files/img/histories-bg.jpg')">
  <h2 class="history-glide__title">@lang('История компании')</h2>

  <div class="history-glide__filter" data-glide-el="controls[nav]">
    @foreach ($histories as $key => $history)
      <button class="history-glide__filter-item" data-glide-dir="={{ $key }}">{{ $history->years }}</button>
    @endforeach
  </div>

  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      @foreach ($histories as $history)
        <li class="glide__slide history-glide__slide">
          <p class="history-glide__text">{{ $history->history }}</p>
        </li>
      @endforeach
    </ul>
  </div>
</section>
