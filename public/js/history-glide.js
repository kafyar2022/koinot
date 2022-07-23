const glideEl = document.querySelector('.history-glide');

const initHistories = () => {
  new Glide(glideEl, {
    type: 'slider',
    startAt: 0,
    perView: 1,
    gap: 0,
  }).mount();

  glideEl.addEventListener('click', (evt) => {
    if (evt.target.classList.contains('history-glide__filter-item') && evt.target.classList.contains('glide__bullet--active')) {
      glideEl.classList.toggle('history-glide--opened-filter');
      glideEl.classList.toggle('history-glide--closed-filter');
    } else {
      glideEl.classList.remove('history-glide--opened-filter');
      glideEl.classList.add('history-glide--closed-filter');
    }
  });
};

export { initHistories }
