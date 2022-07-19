<footer class="page-footer">
  <div class="page-footer__top">
    <dl class="page-footer__menu">
      <div class="page-footer__menu-list">
        <dt class="page-footer__menu-caption">@lang('О нас')</dt>

        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('about', ['locale' => $locale, 'category' => 'history']) }}">@lang('История')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('about', ['locale' => $locale, 'category' => 'mission']) }}">@lang('Миссия, видение, ценности')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('about', ['locale' => $locale, 'category' => 'management']) }}">@lang('Менеджмент')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('news', $locale) }}">@lang('Новости')</a>
        </dd>
      </div>

      <div class="page-footer__menu-list">
        <dt class="page-footer__menu-caption">@lang('Партнерство')</dt>

        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('partnership', ['locale' => $locale, 'category' => 'investors']) }}">@lang('Государствам')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('partnership', ['locale' => $locale, 'category' => 'investors']) }}">@lang('Инвесторам')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('partnership', ['locale' => $locale, 'category' => 'startups']) }}">@lang('Стартаперам и новаторам')</a>
        </dd>
      </div>

      <div class="page-footer__menu-list">
        <dt class="page-footer__menu-caption">@lang('Партнерство')</dt>

        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('projects', ['locale' => $locale, 'category' => 'by-us']) }}">@lang('Реализованные нами')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('projects', ['locale' => $locale, 'category' => 'with-us']) }}">@lang('При нашей поддержке')</a>
        </dd>
      </div>

      <div class="page-footer__menu-list">
        <dt class="page-footer__menu-caption">@lang('Прочее')</dt>

        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('contribution', $locale) }}">@lang('Вклад в общество')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('carrier', $locale) }}">@lang('Карьера')</a>
        </dd>
        <dd class="page-footer__menu-item">
          <a class="page-footer__menu-link" href="{{ route('contacts', $locale) }}">@lang('Контакты')</a>
        </dd>
      </div>
    </dl>

    <button class="page-footer__button circle" type="button">
      <span class="visually-hidden">@lang('Пролистать наверх')</span>
      <svg width="18" height="18">
        <use xlink:href="#more"></use>
      </svg>
    </button>
  </div>

  <div class="page-footer__bottom container">
    <div class="page-footer__details details">
      <a class="details__item" href="mailto:info@koinotinav.tj">
        <span class="details__icon">
          <svg width="18" height="16">
            <use xlink:href="#email"></use>
          </svg>
        </span>
        <span class="details__info">info@koinotinav.tj</span>
      </a>
      <a class="details__item" href="tel:+992918556464">
        <span class="details__icon">
          <svg width="17" height="16">
            <use xlink:href="#phone"></use>
          </svg>
        </span>
        <span class="details__info">+992 918 55 64 64</span>
      </a>
    </div>

    <ul class="social-list">
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

    <p class="page-footer__copyright">&#169; {{ date('Y') }} @lang('Коиноти нав') <br> @lang('Все права защищены')</p>
  </div>
</footer>
