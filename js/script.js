import { preloaderJS } from './custom/preloader.js';
import { checkUser } from './pages/forgot.password.js';
import { signupValid } from './pages/signup.js';
import { catalog } from './pages/catalog.js';
import { birdsSignUp, birdsNewPassword, birdsForgotPassword, birdsLogin } from './custom/birds.js';
import { policies } from './pages/policies.js';
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
        toggleSmall();
        inputValidation();
      },
    },
    {
      namespace: 'signup',
      afterEnter() {
        birdsSignUp();
        logoInfinity();
        signupValid();
        toggleSmall();
      },
    },
    {
      namespace: 'forgot.password',
      afterEnter() {
        logoInfinity();
        birdsForgotPassword();
        checkUser();
        toggleSmall();
      },
    },
    {
      namespace: 'home',
      beforeEnter() {
        preloaderJS();
        profileName();
      },
      afterEnter() {
        toggle();
        preloaderJS();
        logoInfinity();
        profileName();
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
        toggleSmall();
      },
    },
    {
      namespace: 'profile',
      beforeEnter() {
        profileJS();
        quit();
        admin();
      },
      afterEnter() {
        admin();
        toggle();
        logoInfinity();
      },
    },
    {
      namespace: 'catalog',
      beforeEnter() {
        profileName();
      },
      afterEnter() {
        toggle();
        logoInfinity();
        profileName();
        catalog();
      },
    },
    {
      namespace: 'admin',
      beforeEnter() {
        profileName();
      },
      afterEnter() {
        toggle();
        logoInfinity();
      },
    },
    {
      namespace: 'policies',
      beforeEnter() {
        profileName();
        admin();
      },
      afterEnter() {
        policies();
        toggle();
        logoInfinity();
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
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
}

function toggleSmall() {
  let body = document.querySelector('body');

  if (sessionStorage.getItem('dark')) {
    body.classList.add('dark');
  }
}

function toggle() {
  let body = document.querySelector('body');
  let toggle = document.querySelectorAll('.header__toggle');

  toggle.forEach(item => {
    if (sessionStorage.getItem('dark')) {
      body.classList.add('dark');

      item.addEventListener('click', () => {
        if (body.classList.contains('dark')) {
          body.classList.remove('dark');
          sessionStorage.clear();
        } else {
          body.classList.add('dark');
          sessionStorage.setItem('dark', 1);
        }
      });
    } else {
      item.addEventListener('click', () => {
        if (body.classList.contains('dark')) {
          body.classList.remove('dark');
          sessionStorage.clear();
        } else {
          body.classList.add('dark');
          sessionStorage.setItem('dark', 1);
        }
      });
    }
  });
}

function profileName() {
  const profile = document.querySelectorAll('.header__login');
  if (sessionStorage.getItem('value')) {
    for (let iterator of profile) {
      iterator.href = '/./page/profile.php';
      iterator.innerHTML = sessionStorage.getItem('value');
    }
  }
}

function quit() {
  const profileQuit = document.querySelectorAll('.header__login');
  const navbarColumn = document.querySelectorAll('.navbar__column a:first-child');

  navbarColumn.forEach(item => {
    item.addEventListener('click', ev => {
      ev.preventDefault();
    });
  });
  for (const iterator of profileQuit) {
    iterator.innerHTML = 'Выйти';
    iterator.addEventListener('click', () => {
      sessionStorage.removeItem('value');
      sessionStorage.removeItem('lastname');
      sessionStorage.removeItem('name');
      sessionStorage.removeItem('patronymic');
      sessionStorage.removeItem('email');
      sessionStorage.removeItem('phone');
      sessionStorage.removeItem('date_birth');
      sessionStorage.removeItem('admin');
      iterator.href = '/./';
    });
  }
}

function admin() {
  if (sessionStorage.getItem('admin') == 0) {
    let navbar = document.querySelectorAll('.navbar__column a:last-child');
    for (const iterator of navbar) {
      iterator.style.display = 'none';
    }
  }
}

// function changeName() {
//   if (sessionStorage.getItem('name')) {
//     const profile__name = document.querySelectorAll('.profile__name');
//     for (const iterator of profile__name) {
//       iterator.innerHTML = sessionStorage.getItem('name');
//     }
//   }
// }
