import { initHistories } from '../../history-glide.js';

const projects = document.querySelector('.main-page__projects-list');

if (projects) {
  new Glide(projects, {
    type: 'carousel',
    startAt: 0,
    perView: 6,
    autoplay: 2000,
  }).mount();
}

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

initHistories();
