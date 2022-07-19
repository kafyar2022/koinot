import './page-nav.js';

const scrollToTopEl = document.querySelector('.page-footer__button');
scrollToTopEl.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
