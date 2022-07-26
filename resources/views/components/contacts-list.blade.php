@props(['class' => ''])

<ul class="{{ $class }} contacts-list">
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Инвесторам</h3>
    <a class="contacts-list__phone" href="tel:+99244000000">+992 (44) 000 000</a>
    <a class="contacts-list__email" href="mailto:invest@koinotinav.tj">invest@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="16" height="19">
        <use xlink:href="#file"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Партнерство</h3>
    <a class="contacts-list__phone" href="tel:+99244000000">+992 (44) 000 000</a>
    <a class="contacts-list__email" href="mailto:partner@koinotinav.tj">partner@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="18" height="18">
        <use xlink:href="#star"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Общие вопросы</h3>
    <a class="contacts-list__phone" href="tel:+99244000000">+992 (44) 000 000</a>
    <a class="contacts-list__email" href="mailto:info@koinotinav.tj">info@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="16" height="17">
        <use xlink:href="#search"></use>
      </svg>
    </span>
  </li>
</ul>
