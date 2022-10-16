import './page-nav.js';
import './glide.min.js';
import { createElement } from './util.js';

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

window.playVideo = (button) => {
  const elem = document.documentElement;
  const videoTemplate = `
    <video
      class="video-player"
      width="1280"
      height="600"
      controls
    >
      <source type="video/mp4">
      Your browser does not support the video tag.
    </video>
  `;

  const closeTemplate = `
    <button class="close-video" type="button">
      <svg width="24" height="24">
        <use xlink:href="#close"></use>
      </svg>
    </button>
  `;

  const videoEl = createElement(videoTemplate);
  const closeEl = createElement(closeTemplate);
  let timerId = null;

  videoEl.children[0].src = button.dataset.src;

  document.body.append(videoEl);
  document.body.style.overflow = 'hidden';
  videoEl.play();
  elem.requestFullscreen();
  document.body.append(closeEl);

  closeEl.addEventListener('click', (evt) => {
    videoEl.remove();
    evt.target.remove();

    document.fullscreenElement && document.exitFullscreen();
    document.body.removeAttribute('style')
  });

  videoEl.addEventListener('mousemove', () => {
    timerId && clearTimeout(timerId);
    closeEl.classList.remove('hidden');

    timerId = setTimeout(() => {
      closeEl.classList.add('hidden');
    }, 3000)
  });
};
