import './page-nav.js';

const scrollToTopEl = document.querySelector('.page-footer__button');
scrollToTopEl.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

const banner = document.querySelector('.banner');

if (banner) {
  new Glide(banner, {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    gap: 0,
    autoplay: 3000,
  }).mount();
}
