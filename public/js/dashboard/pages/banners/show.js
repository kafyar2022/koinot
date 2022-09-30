const formEl = document.querySelector('.form-dash');
const imagesChooserEl = formEl.querySelector('.form-dash__upload-images');
const submitEl = document.querySelector('[data-action="submit"]');
const imageEls = formEl.querySelectorAll('[data-img]');

imagesChooserEl.addEventListener('change', (evt) =>
  [...evt.target.files].forEach((file) =>
    imagesChooserEl.nextElementSibling
      .insertAdjacentHTML('beforeend', `<img src=${URL.createObjectURL(file)} width="240" height="100" style="margin: 0 8px 8px 0">`)
  )
);

formEl.addEventListener('submit', (evt) => evt.preventDefault());
submitEl.addEventListener('click', () => {
  formEl.submit();
});

if (imageEls) {
  imageEls.forEach((imgEl) => {
    imgEl.addEventListener('click', (evt) => {
      fetch(`/banners/delete/${evt.target.dataset.img}`)
        .then((response) => {
          if (response.ok) {
            evt.target.remove();
          }
        });
    });
  });
}
