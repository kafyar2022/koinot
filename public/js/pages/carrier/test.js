import Quiz from '../../quiz/quiz.js';

const quizContainer = document.querySelector('.quiz-container');

new Quiz(quizContainer).init();

lc_lightbox('.gallery__item', {
  wrap_class: 'lcl_fade_oc',
  gallery: true,
  thumb_attr: 'data-lcl-thumb',
  skin: 'dark',
  fullscreen: true,
});

