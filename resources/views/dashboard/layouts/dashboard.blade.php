<aside class="dashboard @if (session('dashboard') == 'shown') dashboard--shown @else dashboard--hidden @endif">
  <button class="dashboard__state-toggle" type="button">
    @if (session('dashboard') == 'shown')
      Скрыть панель администратора
    @else
      Показать панель администратора
    @endif
  </button>

  <div class="dashboard__inner">
    <a class="dashboard__mode-toggle" href="{{ route('mode', $locale) }}">
      @if (session('editMode'))
        Выключить режим редактирования
      @else
        Включить режим редактирования
      @endif
    </a>

    <ul class="dashboard__menu">
      <li class="dashboard__menu-item @if ($route == 'banners') dashboard__menu-item--current @endif">
        <a class="dashboard__link" href="{{ route('banners') }}">Баннеры</a>
      </li>
      <li class="dashboard__menu-item {{ $route == 'dashboard.histories' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('dashboard.histories') }}">История компании</a>
      </li>
      <li class="dashboard__menu-item {{ $route == 'dashboard.news' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('dashboard.news') }}">Новости</a>
      </li>
      <li class="dashboard__menu-item {{ $route == 'dashboard.projects' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('dashboard.projects') }}">Проекты</a>
      </li>
      <li class="dashboard__menu-item {{ $route == 'dashboard.specialists' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('dashboard.specialists') }}">Специалисты</a>
      </li>
      <li class="dashboard__menu-item {{ $route == 'dashboard.contributions' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('dashboard.contributions') }}">Вклад в общество</a>
      </li>
      <li class="dashboard__menu-item">
        <a class="dashboard__link admin-panel__link--logout" href="{{ route('auth.logout', $locale) }}">Выйти</a>
      </li>
    </ul>
  </div>
</aside>
