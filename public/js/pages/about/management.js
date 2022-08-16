const imgEl = document.querySelector('.specialist-modal__img');
const titleEl = document.querySelector('.specialist-modal__title');
const positionEl = document.querySelector('.specialist-modal__position');
const contentEl = document.querySelector('.specialist-modal__content');

const documentClickHandler = (evt) => {
  if (evt.target.classList.contains('specialist-card__button')) {
    const specialist = JSON.parse(evt.target.dataset.specialist);
    imgEl.src = `/files/specialists/${specialist.avatar}`;
    imgEl.alt = specialist.title;
    titleEl.textContent = `${specialist.surname} ${specialist.name}`;
    positionEl.textContent = specialist.position;
    contentEl.innerHTML = specialist.about;

    document.body.classList.add('page__body--overflow-hidden');
    document.body.addEventListener('click', bodyClickHandler);
    document.addEventListener('keydown', documentKeydownHandler);
  }
};

const bodyClickHandler = (evt) => {
  if (evt.target.classList.contains('specialist-modal')) {
    document.body.classList.remove('page__body--overflow-hidden');
    document.body.removeEventListener('click', bodyClickHandler);
    document.removeEventListener('keydown', documentKeydownHandler);
  }
};

const documentKeydownHandler = (evt) => {
  if (evt.keyCode === 27) {
    document.body.classList.remove('page__body--overflow-hidden');
    document.body.removeEventListener('click', bodyClickHandler);
    document.removeEventListener('keydown', documentKeydownHandler);
  }
};

document.addEventListener('click', documentClickHandler);
