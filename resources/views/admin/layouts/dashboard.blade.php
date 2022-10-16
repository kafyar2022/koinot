<aside class="dashboard">
  <div class="dashboard__inner">
    <ul class="dashboard__menu">
      <li class="dashboard__menu-item {{ $route == 'admin.banners' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.banners') }}">Баннеры</a>
      </li>

      <li class="dashboard__menu-item {{ $route == 'admin.histories' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.histories') }}">История компании</a>
      </li>

      <li class="dashboard__menu-item {{ $route == 'admin.news' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.news') }}">Новости</a>
      </li>

      <li class="dashboard__menu-item {{ $route == 'admin.projects' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.projects') }}">Проекты</a>
      </li>

      <li class="dashboard__menu-item {{ $route == 'admin.contributions' ? 'dashboard__menu-item--current' : '' }}">
        <a class="dashboard__link" href="{{ route('admin.contributions') }}">Вклад в общество</a>
      </li>

      <li class="dashboard__menu-item">
        <a class="dashboard__link admin-panel__link--logout" href="{{ route('auth.logout') }}">Выйти</a>
      </li>
    </ul>
  </div>
</aside>
