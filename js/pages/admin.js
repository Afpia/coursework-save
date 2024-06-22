export function admin() {
  const all = document.querySelector('.admin__all');
  const content = document.querySelector('.admin__content');

  all.addEventListener('click', () => {
    if (content.style.overflowY == 'scroll') {
      all.innerHTML = 'все';
      content.style.overflowY = 'hidden';
    } else {
      content.style.overflowY = 'scroll';
      all.innerHTML = 'отменить';
    }
  });

  const pencil = document.querySelectorAll('.admin__catalog-pencil');
  const inputAll = document.querySelectorAll('.admin__catalog-input');
  const confirm = document.querySelectorAll('.admin__catalog-confirm');

  for (const iterator of pencil) {
    confirm.forEach(conf => {
      inputAll.forEach(item => {
        if (item.hasAttribute('disabled') && iterator.getAttribute('id') == item.getAttribute('id') && iterator.getAttribute('id') == conf.getAttribute('id')) {
          iterator.addEventListener('click', () => {
            item.removeAttribute('disabled');
            iterator.style.display = 'none';
            conf.style.display = 'block';
          });
        } else {
          conf.addEventListener('click', () => {
            conf.style.display = 'none';
            item.setAttribute('disabled', '');
            iterator.style.display = 'block';
          });
        }
      });
    });
  }
}
