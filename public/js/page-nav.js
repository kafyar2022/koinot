const navEl = document.querySelector('.page-nav');

const documentKeydownHandler = (evt) => {
  if (evt.keyCode === 27) {
    const shownSubMenuEl = navEl.querySelector('.page-nav__sublist--shown');

    shownSubMenuEl.classList.remove('page-nav__sublist--shown');
    shownSubMenuEl.classList.add('page-nav__sublist--hidden');
    document.removeEventListener('keydown', documentKeydownHandler);
  }
}

navEl.addEventListener('click', (evt) => {
  if (evt.target.tagName === 'BUTTON') {
    const currentSubMenuEl = evt.target.nextElementSibling;

    if (currentSubMenuEl.classList.contains('page-nav__sublist--hidden')) {
      const shownSubMenuEl = navEl.querySelector('.page-nav__sublist--shown');

      if (shownSubMenuEl) {
        shownSubMenuEl.classList.remove('page-nav__sublist--shown');
        shownSubMenuEl.classList.add('page-nav__sublist--hidden');
      }
      currentSubMenuEl.classList.remove('page-nav__sublist--hidden');
      currentSubMenuEl.classList.add('page-nav__sublist--shown');

      document.addEventListener('keydown', documentKeydownHandler);
    } else {
      currentSubMenuEl.classList.remove('page-nav__sublist--shown');
      currentSubMenuEl.classList.add('page-nav__sublist--hidden');
      document.removeEventListener('keydown', documentKeydownHandler);
    }
  }
});
