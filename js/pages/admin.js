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

  for (const iterator of pencil) {
    inputAll.forEach(item => {
      if (iterator.getAttribute('id') == item.getAttribute('id')) {
        iterator.addEventListener('click', () => {
          if (item.hasAttribute('disabled')) {
            item.removeAttribute('disabled');
          } else {
            item.setAttribute('disabled', '');
          }
        });
      }
    });
  }
}
