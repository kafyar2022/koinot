const formEl = document.querySelector('.form-dash');
const imagesChooserEl = formEl.querySelector('.form-dash__upload-images');
const submitEl = document.querySelector('[data-action="submit"]');
const imageEls = formEl.querySelectorAll('[data-img]');

const simditor = new Simditor({
  textarea: formEl.querySelector('textarea[name="content"]'),
  toolbar: [
    'title',
    'bold',
    'italic',
    'underline',
    'strikethrough',
    'fontScale',
    'color',
    'ol',
    'ul',
    'blockquote',
    'table',
    'link',
    'hr',
    'indent',
    'outdent',
    'alignment',
  ]
});

const pristine = window.Pristine(formEl, {
  classTo: 'form-dash__element',
  errorClass: 'form-dash__element--invalid',
  successClass: 'form-dash__element--valid',
  errorTextParent: 'form-dash__element',
  errorTextTag: 'span',
  errorTextClass: 'form-dash__error'
}, true);

imagesChooserEl.addEventListener('change', (evt) =>
  [...evt.target.files].forEach((file) =>
    imagesChooserEl.nextElementSibling
      .insertAdjacentHTML('beforeend', `<img src=${URL.createObjectURL(file)} width="70" height="70">`)
  )
);

simditor.body[0].classList.add('form-dash__field', 'content');

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => {
  const isValid = pristine.validate();
  if (isValid) {
    formEl.submit();
  }
});

if (imageEls) {
  imageEls.forEach((imgEl) => {
    imgEl.addEventListener('click', (evt) => {
      fetch(`/news-img/delete/${evt.target.dataset.img}`)
        .then((response) => {
          if (response.ok) {
            evt.target.remove();
          }
        });
    });
  });
}
