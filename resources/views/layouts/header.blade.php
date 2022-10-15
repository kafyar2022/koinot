<header class="page-header">
  <div class="page-header__top container">
    <a class="page-header__logo" @if ($route != 'main') href="{{ route('main') }}" @endif>
      <picture>
        <source media="(max-width: 767px)" srcset="{{ asset('img/logotype-mobile.svg') }}">
        <source media="(max-width: 1279px)" srcset="{{ asset('img/logotype-tablet.svg') }}">
        <img
          src="{{ asset('img/logotype-desktop.svg') }}"
          width="190"
          height="32"
          alt="@lang('Коиноти нав')">
      </picture>
    </a>

    <div class="page-header__details details">
      <a class="details__item" href="mailto:{{ $data['details-email-' . $locale] }}">
        <span class="details__icon">
          <svg width="18" height="16">
            <use xlink:href="#email"></use>
          </svg>
        </span>
        <span
          class="details__info"
          data-text="details-email-{{ $locale }}">
          {{ $data['details-email-' . $locale] }}
        </span>
      </a>
      <a
        class="details__item"
        href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['details-phone-' . $locale]) }}">
        <span class="details__icon">
          <svg width="17" height="16">
            <use xlink:href="#phone"></use>
          </svg>
        </span>
        <span
          class="details__info"
          data-text="details-phone-{{ $locale }}">
          {{ $data['details-phone-' . $locale] }}
        </span>
      </a>
    </div>
  </div>

  <nav class="page-nav">
    <div class="page-nav__container container">
      <ul class="page-nav__list">
        <li class="page-nav__item {{ $route == 'main' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" @if ($route != 'main') href="{{ route('main') }}" @endif>
            @lang('Главная')
          </a>
        </li>

        <li
          class="page-nav__item
          {{ $route == 'about' ? 'page-nav__item--current' : '' }}
          {{ $route == 'news' || $route == 'news.show' ? 'page-nav__item--current' : '' }}">
          <button class="page-nav__button">@lang('О нас')</button>

          <ul class="page-nav__sublist page-nav__sublist--hidden">
            <li
              class="page-nav__subitem
              {{ request('category') == 'history' ? 'page-nav__subitem--current' : '' }}">
              <a
                class="page-nav__sublink"
                @if (request('category') != 'history') href="{{ route('about', 'history') }}" @endif>
                @lang('Сфера деятельности')
              </a>
            </li>

            <li
              class="page-nav__subitem
              {{ request('category') == 'mission' ? 'page-nav__subitem--current' : '' }}">
              <a
                class="page-nav__sublink"
                @if (request('category') != 'mission') href="{{ route('about', 'mission') }}" @endif>
                @lang('Миссия, Видение, Ценности')
              </a>
            </li>

            <li
              class="page-nav__subitem
              {{ $route == 'news' || $route == 'news.show' ? 'page-nav__subitem--current' : '' }}">
              <a
                class="page-nav__sublink"
                @if ($route != 'news') href="{{ route('news') }}" @endif>
                @lang('Новости')
              </a>
            </li>
          </ul>

          <svg class="page-nav__icon" width="16" height="14">
            <use xlink:href="#triangle"></use>
          </svg>
        </li>

        <li class="page-nav__item {{ $route == 'projects' ? 'page-nav__item--current' : '' }}">
          <a
            class="page-nav__link"
            @if ($route != 'projects') href="{{ route('projects') }}" @endif>
            @lang('Проекты')
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'partnership' ? 'page-nav__item--current' : '' }}">
          <a
            class="page-nav__link"
            @if ($route != 'partnership') href="{{ route('partnership') }}" @endif>
            @lang('Партнерство')
          </a>
        </li>

        <li
          class="page-nav__item
          {{ $route == 'contribution' ? 'page-nav__item--current' : '' }}
          {{ $route == 'contribution.show' ? 'page-nav__item--current' : '' }}">
          <a
            class="page-nav__link"
            @if ($route != 'contribution') href="{{ route('contribution') }}" @endif>
            @lang('Вклад в общество')
          </a>
        </li>

        <li
          class="page-nav__item
          {{ $route == 'carrier' || $route == 'carrier.test' ? 'page-nav__item--current' : '' }}">
          <a
            class="page-nav__link"
            @if ($route != 'carrier') href="{{ route('carrier') }}" @endif>
            @lang('Карьера')
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'contacts' ? 'page-nav__item--current' : '' }}">
          <a
            class="page-nav__link"
            @if ($route != 'contacts') href="{{ route('contacts') }}" @endif>
            @lang('Контакты')
          </a>
        </li>
      </ul>

      <a
        class="carrier-link
        {{ $route == 'carrier' || $route == 'carrier.test' ? 'carrier-link--current' : '' }}"
        @if ($route != 'carrier') href="{{ route('carrier') }}" @endif>
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
