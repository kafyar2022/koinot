<div class="quiz">
  <div class="quiz__head">
    <div class="quiz__head-item">Вопрос 10 из 10</div>
    <div class="quiz__head-item quiz__head-item--current">Личная информация</div>
  </div>

  <form class="quiz__form">
    <div class="quiz__form-inner">
      <input name="name" type="text" placeholder="Ваше имя и фамилия" required>
      <input name="email" type="email" placeholder="Ваша электронная почта" required>
      <input name="tel" type="tel" placeholder="Контактный номер">

      <label class="quiz__form-cv">
        <input class="visually-hidden" name="cv" type="file">
        <svg width="20" height="16" fill="none">
          <path d="M18 2h-8L8 0H2C.89 0 .01.89.01 2L0 14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2Zm-1 8h-3v3h-2v-3H9V8h3V5h2v3h3v2Z" fill="#ED2E38"/>
        </svg>
        <span>Загрузить резюме</span>
      </label>

      <textarea name="message" placeholder="Опишите, почему вы хотите работать с нами"></textarea>
    </div>

    <button class="quiz__form-submit button" type="submit">Отправить</button>
  </form>

</div>
