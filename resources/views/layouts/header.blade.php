<header class="page-header">
  <div class="page-header__top container">
    <a class="page-header__logo" href="{{ route('main') }}">
      <img
        src="{{ asset('img/main-logo.svg') }}"
        width="190"
        height="32"
        alt="Коиноти нав">
    </a>

    <div class="page-header__details details">
      <a class="details__item" href="mailto:info@koinotinav.tj">
        <span class="details__icon">
          <svg width="18" height="16">
            <use xlink:href="#email"></use>
          </svg>
        </span>
        <span class="details__info">info@koinotinav.tj</span>
      </a>
      <a class="details__item" href="tel:+992446000043">
        <span class="details__icon">
          <svg width="17" height="16">
            <use xlink:href="#phone"></use>
          </svg>
        </span>
        <span class="details__info">+992 (44) 600 00 43</span>
      </a>
    </div>

    <div class="locales">
      <span class="locales__icon">
        <svg width="18" height="18">
          <use xlink:href="#global"></use>
        </svg>
      </span>
      <ul class="locales__list">
        <li class="locales__item locales__item--current">
          <a class="locales__link">Ru</a>
        </li>
        <li class="locales__item">
          <a class="locales__link" href="https://koinotinav.com/auth/login">En</a>
        </li>
      </ul>
    </div>
  </div>

  <nav class="page-nav">
    <div class="page-nav__container container">
      <ul class="page-nav__list">
        <li class="page-nav__item {{ $route == 'main' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('main') }}">
            Главная
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'about' || $route == 'news' || $route == 'news.show' ? 'page-nav__item--current' : '' }}">
          <button class="page-nav__button">О нас</button>

          <ul class="page-nav__sublist page-nav__sublist--hidden">
            <li class="page-nav__subitem {{ request('category') == 'field-of-activity' ? 'page-nav__subitem--current' : '' }}">
              <a class="page-nav__sublink" href="{{ route('about', 'field-of-activity') }}">
                Сфера деятельности
              </a>
            </li>

            <li class="page-nav__subitem {{ request('category') == 'mission' ? 'page-nav__subitem--current' : '' }}">
              <a class="page-nav__sublink" href="{{ route('about', 'mission') }}">
                Миссия, Видение, Ценности
              </a>
            </li>

            <li class="page-nav__subitem {{ $route == 'news' || $route == 'news.show' ? 'page-nav__subitem--current' : '' }}">
              <a class="page-nav__sublink" href="{{ route('news') }}">
                Новости
              </a>
            </li>
          </ul>

          <svg class="page-nav__icon" width="16" height="14">
            <use xlink:href="#triangle"></use>
          </svg>
        </li>

        <li class="page-nav__item {{ $route == 'projects' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('projects') }}">
            Проекты
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'partnership' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('partnership') }}">
            Партнерство
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'contribution' || $route == 'contribution.show' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('contribution') }}">
            Вклад в общество
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'carrier' || $route == 'carrier.test' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('carrier') }}">
            Карьера
          </a>
        </li>

        <li class="page-nav__item {{ $route == 'contacts' ? 'page-nav__item--current' : '' }}">
          <a class="page-nav__link" href="{{ route('contacts') }}">
            Контакты
          </a>
        </li>
      </ul>

      <a class="carrier-link {{ $route == 'carrier' || $route == 'carrier.test' ? 'carrier-link--current' : '' }}" href="{{ route('carrier') }}">
        <span class="carrier-link__icon">
          <svg width="18" height="18">
            <use xlink:href="#pero"></use>
          </svg>
        </span>
        Карьера
      </a>
    </div>
  </nav>
</header>
