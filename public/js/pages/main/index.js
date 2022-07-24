import { initHistories } from '../../history-glide.js';

new Glide('.main-page__projects-list', {
  type: 'carousel',
  startAt: 0,
  perView: 6,
  autoplay: 2000,
}).mount();

initHistories();
