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

initHistories();
