export default function catalog() {
  const tabItem = document.querySelectorAll('.catalog__btn-item');
  const tabContent = document.querySelectorAll('.catalog__content');

  tabItem.forEach(el => {
    el.addEventListener('click', open);
  });

  if (window.location.hash != 'http://save/page/catalog.php') {
    const hash = window.location.hash;

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
    document.querySelector(`${hash}`).classList.add('catalog__content--active');
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
    document.querySelector(`${button}`).classList.add('catalog__content--active');
    window.location.href = `http://save/page/catalog.php${button}`;
  }
}
