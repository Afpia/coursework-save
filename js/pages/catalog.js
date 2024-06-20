export function catalog() {
  const tabItem = document.querySelectorAll('.catalog__btn-item');
  const tabContent = document.querySelectorAll('.catalog__content');

  tabItem.forEach(el => {
    el.addEventListener('click', open);
  });

  if (window.location.search != '') {
    const hash = window.location.search.replace(/[\?\.]/g, '');

    console.log(hash);
    tabItem.forEach(function (item) {
      item.classList.remove('catalog__btn--active');
    });

    tabContent.forEach(function (item) {
      item.classList.remove('catalog__content--active');
    });

    tabItem.forEach(el => {
      if (el.dataset.button == hash) {
        el.classList.add('catalog__btn--active');
      }
    });
    document.getElementById(`${hash}`).classList.add('catalog__content--active');
  }
  function open(ev) {
    const tabTarget = ev.target;
    const button = tabTarget.dataset.button;

    tabItem.forEach(function (item) {
      item.classList.remove('catalog__btn--active');
    });

    tabContent.forEach(function (item) {
      item.classList.remove('catalog__content--active');
    });

    tabTarget.classList.add('catalog__btn--active');
    document.getElementById(`${button}`).classList.add('catalog__content--active');
    const path = new String(window.location.origin + window.location.pathname);
		history.pushState(null, `${path}?${button}`, `${path}?${button}`);
  }

  const button = document.querySelectorAll('.catalog__content-item button');

  button.forEach(item => {
    item.addEventListener('click', ev => {
      let result = confirm('Подтвердить покупку');
      if (result) return;
      ev.preventDefault();
    });
  });
}
