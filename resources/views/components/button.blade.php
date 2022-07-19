@props(['class' => ''])

<button class="button {{ $class }}" type="button">
  <span class="button__icon">
    <svg width="18" height="18">
      <use xlink:href="#more"></use>
    </svg>
  </span>
  {{ $slot }}
</button>
