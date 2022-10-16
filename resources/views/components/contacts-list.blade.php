@props([
    'class' => '',
])

<ul class="{{ $class }} contacts-list">
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Общие вопросы</h3>
    <a class="contacts-list__phone" href="tel:+992446000043">+992 (44) 600 00 43</a>
    <a class="contacts-list__email" href="mailto:info@koinotinav.tj">info@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="16" height="19">
        <use xlink:href="#file"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Персонал</h3>
    <a class="contacts-list__phone" href="tel:+992446000043">+992 (44) 600 00 43</a>
    <a class="contacts-list__email" href="mailto:hr@koinotinav.tj">hr@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="18" height="18">
        <use xlink:href="#star"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title">Инвестиции и развитие</h3>
    <a class="contacts-list__phone" href="tel:+992 (44) 600 00 43">+992 (44) 600 00 43</a>
    <a class="contacts-list__email" href="mailto:development@koinotinav.tj">development@koinotinav.tj</a>
    <span class="contacts-list__icon">
      <svg width="16" height="17">
        <use xlink:href="#search"></use>
      </svg>
    </span>
  </li>
</ul>
