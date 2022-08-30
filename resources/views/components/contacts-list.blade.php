@props([
    'class' => '',
    'data',
])

<ul class="{{ $class }} contacts-list">
  <li class="contacts-list__item">
    <h3 class="contacts-list__title" data-text="contacts-investors-term-{{ $locale }}">{{ $data['contacts-investors-term-' . $locale] }}</h3>
    <a class="contacts-list__phone" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['contacts-investors-phone-' . $locale]) }}" data-text="contacts-investors-phone-{{ $locale }}">{{ $data['contacts-investors-phone-' . $locale] }}</a>
    <a class="contacts-list__email" href="mailto:{{ $data['contacts-investors-email-' . $locale] }}" data-text="contacts-investors-email-{{ $locale }}">{{ $data['contacts-investors-email-' . $locale] }}</a>
    <span class="contacts-list__icon">
      <svg width="16" height="19">
        <use xlink:href="#file"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title" data-text="contacts-partnership-term-{{ $locale }}">{{ $data['contacts-partnership-term-' . $locale] }}</h3>
    <a class="contacts-list__phone" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['contacts-partnership-phone-' . $locale]) }}" data-text="contacts-partnership-phone-{{ $locale }}">{{ $data['contacts-partnership-phone-' . $locale] }}</a>
    <a class="contacts-list__email" href="mailto:{{ $data['contacts-partnership-email-' . $locale] }}" data-text="contacts-partnership-email-{{ $locale }}">{{ $data['contacts-partnership-email-' . $locale] }}</a>
    <span class="contacts-list__icon">
      <svg width="18" height="18">
        <use xlink:href="#star"></use>
      </svg>
    </span>
  </li>
  <li class="contacts-list__item">
    <h3 class="contacts-list__title" data-text="contacts-other-term-{{ $locale }}">{{ $data['contacts-other-term-' . $locale] }}</h3>
    <a class="contacts-list__phone" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $data['contacts-other-phone-' . $locale]) }}" data-text="contacts-other-phone-{{ $locale }}">{{ $data['contacts-other-phone-' . $locale] }}</a>
    <a class="contacts-list__email" href="mailto:{{ $data['contacts-other-email-' . $locale] }}" data-text="contacts-other-email-{{ $locale }}">{{ $data['contacts-other-email-' . $locale] }}</a>
    <span class="contacts-list__icon">
      <svg width="16" height="17">
        <use xlink:href="#search"></use>
      </svg>
    </span>
  </li>
</ul>
