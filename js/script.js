import preloaderJS from './custom/preloader.js';
import forgotPassword from './pages/forgot.password.js';
import signupValid from './pages/signup.js';
import catalog from './pages/catalog.js';
import { birdsSignUp, birdsNewPassword, birdsForgotPassword, birdsLogin } from './custom/birds.js';
import { eye, inputValidation } from './pages/login.js';
import { newPassword } from './pages/new.password.js';
import { profileJS } from './pages/profile.js';

barba.init({
  views: [
    {
      namespace: 'login',
      beforeEnter() {
        eye();
      },
      afterEnter() {
        birdsLogin();
        logoInfinity();
        inputValidation();
      },
    },
    {
      namespace: 'signup',
      afterEnter() {
        birdsSignUp();
        logoInfinity();
        signupValid();
      },
    },
    {
      namespace: 'forgot.password',
      afterEnter() {
        logoInfinity();
        birdsForgotPassword();
        forgotPassword();
      },
    },
    {
      namespace: 'home',
      beforeEnter() {
        preloaderJS();
      },
      afterEnter() {
        toggle();
        preloaderJS();
        logoInfinity();
        offClick();
        swiper();
      },
    },
    {
      namespace: 'new.password',
      afterEnter() {
        logoInfinity();
        birdsNewPassword();
        newPassword();
      },
    },
    {
      namespace: 'profile',
      afterEnter() {
        toggle();
        logoInfinity();
        profileJS();
      },
    },
    {
      namespace: 'catalog',
      afterEnter() {
        toggle();
        logoInfinity();
        catalog();
      },
    },
  ],
  transitions: [
    {
      name: 'opacity-transition',
      sync: true,
      leave(data) {
        return gsap.to(data.current.container, {
          opacity: 0,
        });
      },
      enter(data) {
        return gsap.from(data.next.container, {
          opacity: 0,
        });
      },
    },
  ],
});

function logoInfinity() {
  gsap.to('.logo', { repeat: -1, rotate: 360, duration: 5, yoyo: true });
}

function offClick() {
  const link = document.querySelectorAll('.header__inner a');

  link.forEach(item => {
    if (item.hasAttribute('data-off-click')) {
      item.addEventListener('click', ev => {
        ev.preventDefault();
      });
    }
  });
}

function swiper() {
  new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'creative',
    speed: 600,
    creativeEffect: {
      prev: {
        opacity: 0,
        scale: -0.4,
        shadow: true,
        origin: 'left center',
      },
      next: {
        opacity: 0,
        scale: 0,
        shadow: true,
        origin: 'right center',
      },
    },

    grabCursor: true,
    spaceBetween: 42,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
}

function toggle() {
  let body = document.querySelector('body');
  let toggle = document.querySelectorAll('.header__toggle');

  toggle.forEach(item => {
    item.addEventListener('click', () => {
      body.classList.toggle('dark');
    });
  });
}
