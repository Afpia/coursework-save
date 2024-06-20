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
}
