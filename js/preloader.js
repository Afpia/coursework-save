export default function preloaderJS() {
  window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    const fadeDOM = document.querySelectorAll('.fade');
    const content = document.querySelectorAll('img, video, script');

    let i = 0;
    content.forEach(item => {
      item.onload = () => {
        item += i++;
        if (item === content.length) {
          preloader.classList.add('preloader--hide');
        }
      };
    });
    fadeDOM.forEach(item => {
      item.style.overflow = '';
    });
  });

  const preloader = document.querySelector('.preloader');
  const fadeDOM = document.querySelectorAll('.fade');

  if (window.location.pathname == '/index.php' || window.location.pathname == '/') {
    preloader.classList.add('preloader--hide');
    fadeDOM.forEach(item => {
      item.style.overflow = '';
    });
  } else {
    preloader.classList.add('preloader--hide');
    fadeDOM.forEach(item => {
      item.style.overflow = '';
    });
  }
}
