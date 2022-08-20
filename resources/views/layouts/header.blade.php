<header class="page-header">
  <div class="page-header__top container">
    <a class="page-header__logo" @if ($route != 'main') href="{{ route('main') }}" @endif>
      <picture>
        <source media="(max-width: 767px)" srcset="{{ asset('img/logotype-mobile.svg') }}">
        <source media="(max-width: 1279px)" srcset="{{ asset('img/logotype-tablet.svg') }}">
        <img src="{{ asset('img/logotype-desktop.svg') }}" width="190" height="32" alt="@lang('Коиноти нав')">
      </picture>
    </a>

    <div class="page-header__details details">
      <a class="details__item" href="mailto:{{ $data['details-email-' . $locale] }}">
        <span class="details__icon">
          <svg width="18" height="16">
            <use xlink:href="#email"></use>
          </svg>
        </span>
        <span class="details__info" data-text="details-email-{{ $locale }}">{{ $data['details-email-' . $locale] }}</span>
      </a>
      <a class="details__item" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['details-phone-' . $locale]) }}">
        <span class="details__icon">
          <svg width="17" height="16">
            <use xlink:href="#phone"></use>
          </svg>
        </span>
        <span class="details__info" data-text="details-phone-{{ $locale }}">{{ $data['details-phone-' . $locale] }}</span>
      </a>
    </div>

    <ul class="page-header__social-list social-list">
      <li class="social-list__item">
        <a class="social-list__link" href="#">
          <span class="visually-hidden">Фейсбук</span>
          <span class="social-list__icon">
            <svg width="13" height="22">
              <use xlink:href="#facebook"></use>
            </svg>
          </span>
        </a>
      </li>
      <li class="social-list__item">
        <a class="social-list__link" href="#">
          <span class="visually-hidden">Инстаграм</span>
          <span class="social-list__icon">
            <svg width="22" height="22">
              <use xlink:href="#instagram"></use>
            </svg>
          </span>
        </a>
      </li>
      <li class="social-list__item">
        <a class="social-list__link" href="#">
          <span class="visually-hidden">Линкед ин</span>
          <span class="social-list__icon">
            <svg width="22" height="21">
              <use xlink:href="#linkedin"></use>
            </svg>
          </span>
        </a>
      </li>
    </ul>

    <div class="locales">
      <span class="locales__icon">
        <svg width="18" height="18">
          <use xlink:href="#global"></use>
        </svg>
      </span>
      <ul class="locales__list">
        @foreach (config('app.available_locales') as $lang)
          @if ($locale == config('app.fallback_locale'))
            <li class="locales__item @if ($locale == $lang) locales__item--current @endif">
              <a class="locales__link" @if ($locale != $lang) href="/{{ $lang . '/' . request()->path() }}" @endif>{{ ucfirst($lang) }}</a>
            </li>
          @else
            @if ($lang == config('app.fallback_locale'))
              <li class="locales__item @if ($locale == $lang) locales__item--current @endif">
                <a class="locales__link" @if ($locale != $lang) href="/{{ substr(request()->path(), 3) }}" @endif>{{ ucfirst($lang) }}</a>
              </li>
            @else
              <li class="locales__item @if ($locale == $lang) locales__item--current @endif">
                <a class="locales__link" @if ($locale != $lang) href="/{{ $lang . '/' . substr(request()->path(), 3) }}" @endif>{{ ucfirst($lang) }}</a>
              </li>
            @endif
          @endif
        @endforeach
      </ul>
    </div>
  </div>

  <nav class="page-nav">
    <div class="page-nav__container container">
      <ul class="page-nav__list">
        <li class="page-nav__item @if ($route == 'main') page-nav__item--current @endif">
          <a class="page-nav__link" @if ($route != 'main') href="{{ route('main') }}" @endif>@lang('Главная')</a>
        </li>

        <li class="page-nav__item @if ($route == 'about' || $route == 'news' || $route == 'news.show') page-nav__item--current @endif">
          <button class="page-nav__button">@lang('О нас')</button>

          <ul class="page-nav__sublist page-nav__sublist--hidden">
            <li class="page-nav__subitem @if (request('category') == 'history') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'history') href="{{ route('about', 'history') }}" @endif>@lang('История')</a>
            </li>
            <li class="page-nav__subitem @if (request('category') == 'mission') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'mission') href="{{ route('about', 'mission') }}" @endif>@lang('Миссия, видение, ценности')</a>
            </li>
            <li class="page-nav__subitem @if (request('category') == 'management') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'management') href="{{ route('about', 'management') }}" @endif>@lang('Менеджмент')</a>
            </li>
            <li class="page-nav__subitem @if ($route == 'news' || $route == 'news.show') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if ($route != 'news') href="{{ route('news') }}" @endif>@lang('Новости')</a>
            </li>
          </ul>

          <svg class="page-nav__icon" width="16" height="14">
            <use xlink:href="#triangle"></use>
          </svg>
        </li>

        <li class="page-nav__item @if ($route == 'projects') page-nav__item--current @endif">
          <button class="page-nav__button">@lang('Проекты')</button>

          <ul class="page-nav__sublist page-nav__sublist--hidden">
            <li class="page-nav__subitem @if (request('category') == 'by-us') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'by-us') href="{{ route('projects', 'by-us') }}" @endif>@lang('Реализованные нами')</a>
            </li>
            <li class="page-nav__subitem @if (request('category') == 'with-us') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'with-us') href="{{ route('projects', 'with-us') }}" @endif>@lang('При нашей поддержке')</a>
            </li>
          </ul>

          <svg class="page-nav__icon" width="16" height="14">
            <use xlink:href="#triangle"></use>
          </svg>
        </li>

        <li class="page-nav__item @if ($route == 'partnership') page-nav__item--current @endif">
          <button class="page-nav__button">@lang('Партнерство')</button>

          <ul class="page-nav__sublist page-nav__sublist--hidden">
            <li class="page-nav__subitem @if (request('category') == 'investors') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'investors') href="{{ route('partnership', 'investors') }}" @endif>@lang('Инвесторам и государствам')</a>
            </li>
            <li class="page-nav__subitem @if (request('category') == 'startups') page-nav__subitem--current @endif">
              <a class="page-nav__sublink" @if (request('category') != 'startups') href="{{ route('partnership', 'startups') }}" @endif>@lang('Стартаперам и новаторам')</a>
            </li>
          </ul>
          
          <svg class="page-nav__icon" width="16" height="14">
            <use xlink:href="#triangle"></use>
          </svg>
        </li>

        <li class="page-nav__item @if ($route == 'contribution' || $route == 'contribution.show') page-nav__item--current @endif">
          <a class="page-nav__link" @if ($route != 'contribution') href="{{ route('contribution') }}" @endif>@lang('Вклад в общество')</a>
        </li>

        <li class="page-nav__item @if ($route == 'carrier' || $route == 'carrier.test') page-nav__item--current @endif">
          <a class="page-nav__link" @if ($route != 'contacts') href="{{ route('carrier') }}" @endif>@lang('Карьера')</a>
        </li>

        <li class="page-nav__item @if ($route == 'contacts') page-nav__item--current @endif">
          <a class="page-nav__link" @if ($route != 'contacts') href="{{ route('contacts') }}" @endif>@lang('Контакты')</a>
        </li>
      </ul>

      <a class="carrier-link @if ($route == 'carrier' || $route == 'carrier.test') carrier-link--current @endif" @if ($route != 'carrier') href="{{ route('carrier') }}" @endif>
        <span class="carrier-link__icon">
          <svg width="18" height="18">
            <use xlink:href="#pero"></use>
          </svg>
        </span>
        @lang('Карьера')
      </a>
    </div>
  </nav>
</header>
