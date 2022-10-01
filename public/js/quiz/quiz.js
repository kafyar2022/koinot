import { Stages } from './stages.js'
import { createElement } from '../util.js';
import QuizForm from './quiz-form.js';

const createQuizHeadTemplate = (stages, currentStage, currentQuestion) => {
  const currentQuestionIndex = currentStage.questions
    .findIndex((question) => question === currentQuestion);

  return `
    <div class="quiz__head">
      <div class="quiz__head-item">
        Вопрос ${+currentQuestionIndex + 1} из ${currentStage.questions.length}
      </div>

      ${stages.map((stage) => {
    if (stage.questions.every((question) => question.userAnswer !== '')) {
      return `
        <div class="quiz__head-item">
          ${stage.title}
          <svg
            width="18"
            height="18"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#29c529"
            stroke-width="3"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M20 6 9 17l-5-5" />
          </svg>
        </div>
      `;
    }
    if (stage === currentStage) {
      return `<div class="quiz__head-item quiz__head-item--current">${stage.title}</div>`
    }
    return `<div class="quiz__head-item quiz__head-item--disabled">${stage.title}</div>`
  }).join('')}
    </div>
  `;
};

const createQuizBodyTemplate = ({ question, choices }) => {
  return `
    <div class="quiz__body">
      <div class="quiz__question">${question}</div>

      <form class="quiz__answers">
        ${choices.map((choice) => `
          <label class="quiz__answer">
            <input name="answer" type="radio" value="${choice}">
            ${choice}
          </label>
        `).join('')}
      </form>
    </div>
  `;
};

const createQuizTemplate = (stages, currentStage, currentQuestion) => `
  <div class="quiz">
    ${createQuizHeadTemplate(stages, currentStage, currentQuestion)}

    ${createQuizBodyTemplate(currentQuestion)}

    <button class="quiz__next-question button" type="button" disabled>
      Далее
    </button>
  </div>
`;

export default class Quiz {
  #container = null;
  #element = null;
  #stages = null;
  #currentStage = null;
  #currentQuestion = null;

  constructor(container) {
    this.#container = container;
  }

  get template() {
    return createQuizTemplate(this.#stages, this.#currentStage, this.#currentQuestion);
  }

  init = () => {
    this.#stages = JSON.parse(localStorage.getItem('stages')) ?? Stages;
    this.#currentStage = this.#stages.find(({ questions }) =>
      !questions.every(({ userAnswer }) => userAnswer !== '')
    );

    if (!this.#currentStage) {
      this.destroy();
      new QuizForm(this.#container).init();
      return;
    }

    this.#currentQuestion = this.#currentStage.questions
      .find(({ userAnswer }) => userAnswer === '');
    this.#element = createElement(this.template);
    this.#container.append(this.#element);
    this.#element.addEventListener('click', this.#handleElementClick);
  }

  destroy = () => {
    this.#element && this.#element.remove();
    this.#element = null;
    this.#stages = null;
    this.#currentStage = null;
    this.#currentQuestion = null;
  }

  #handleElementClick = (evt) => {
    if (evt.target.tagName === 'INPUT') {
      this.#currentQuestion.userAnswer = evt.target.value;

      this.#element.querySelector('.quiz__next-question')
        .removeAttribute('disabled');

    }

    if (evt.target.tagName === 'BUTTON') {
      this.#switchToNextQuestion();
    }
  }

  #switchToNextQuestion = () => {
    localStorage.setItem('stages', JSON.stringify(this.#stages));
    this.destroy();
    this.init();
  }
}
