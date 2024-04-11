import preloaderJS from './preloader.js';
import forgotPassword from './forgot.password.js';
import signupValid from './signup.js';

barba.init({
  views: [
    {
      namespace: 'login',
      afterEnter() {
        birdsLogin();
        eye();
        logoInfinity();
        inputValidation();
      },
    },
    {
      namespace: 'signup',
      afterEnter() {
        logoInfinity();
        eye();
        signupValid();
        newPassword();
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
        preloaderJS();
        logoInfinity();
        offClick();
      },
    },
    {
      namespace: 'new.password',
      afterEnter() {
        logoInfinity();
        birdsNewPassword();
        newPassword();
        eye();
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
function birdsLogin() {
  VANTA.BIRDS({
    el: '.login__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    backgroundAlpha: 0.0,
  });
}

function birdsForgotPassword() {
  VANTA.BIRDS({
    el: '.password__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    color1: 0x433c69,
    color2: 0x4395aa,
    backgroundAlpha: 0.0,
  });
}
function birdsNewPassword() {
  VANTA.BIRDS({
    el: '.new-pass__background',
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    quantity: 3.0,
    birdSize: 1.0,
    wingSpan: 30.0,
    separation: 100.0,
    color1: 0x847356,
    color2: 0xbd802b,
    backgroundAlpha: 0.0,
  });
}
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

function eye() {
  const inputPassword = document.querySelector('.login__form-input_password');
  const closeEye = document.querySelector('.login__eyeClose');
  const eyeButton = document.querySelector('.login__eyeClose-button');
  const eye = document.querySelector('.login__eye');
  const cross = document.querySelector('.login__cross');

  eyeButton.addEventListener('click', () => {
    if (inputPassword.getAttribute('type') == 'password') {
      inputPassword.setAttribute('type', 'text');
      closeEye.classList.add('login__eye-hidden');
      eye.classList.remove('login__eye-hidden');
    } else {
      inputPassword.setAttribute('type', 'password');
      closeEye.classList.remove('login__eye-hidden');
      eye.classList.add('login__eye-hidden');
    }
  });

  cross.addEventListener('click', () => {
    inputPassword.value = '';
  });
}

function inputValidation() {
  const inputAllValid = document.querySelectorAll('.login__form-input');
  function validation(done) {
    let result = true;

    function errorInput(input, text) {
      const parent = input.parentElement;
      let errorLabel = document.createElement('div');
      errorLabel.textContent = text;
      errorLabel.classList.add('error-label');
      input.classList.add('error');
      parent.append(errorLabel);
      setTimeout(() => {
        errorLabel.remove();
        input.classList.remove('error');
      }, 2000);
    }

    function emailInput(input) {
      return !/^\w+([\.-]?\w+)*@\w([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }

    for (let input of inputAllValid) {
      if (input.value == '') {
        result = false;
        errorInput(input, 'Пустое поле');
      } else if (input.hasAttribute('data-email')) {
        if (emailInput(input)) {
          result = false;
          errorInput(input, 'Неправильный ввод');

          buttonForm.setAttribute('disabled', ' ');
          setTimeout(() => {
            buttonForm.removeAttribute('disabled');
          }, 2000);
        } else if (done == 1) {
          result = false;
          errorInput(input, 'Такого пользователя нет');

          buttonForm.setAttribute('disabled', ' ');
          setTimeout(() => {
            buttonForm.removeAttribute('disabled');
          }, 2000);
        } else {
          result = true;
        }
      } else if (input.hasAttribute('data-password')) {
        if (done == 2) {
          result = false;
          errorInput(input, 'Неправильный пароль');

          buttonForm.setAttribute('disabled', ' ');
          setTimeout(() => {
            buttonForm.removeAttribute('disabled');
          }, 2000);
        } else {
          result = true;
        }
      }
    }
    return result;
  }

  const form = document.querySelector('.login__form');
  const buttonForm = document.querySelector('.login__form-submit');

  form.addEventListener('submit', ev => {
    ev.preventDefault();

    if (validation() == true) {
      let passwordForm = document.querySelector('.login__form-input_password').value;
      let emailForm = document.querySelector('.login__form-input_mail').value;

      let number = {
        email: emailForm,
        password: passwordForm,
      };

      async function formSend() {
        let response = await fetch('../php/checkUser.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8',
          },
          body: JSON.stringify(number),
        });
        if (response.ok) {
          let done = await response.json();
          if (done == 1) {
            validation(done);
          } else if (done == 2) {
            validation(done);
          } else {
            // async function redirect() {
            //   const href = document.createElement('a');
            //   href.setAttribute('href', 'http://save/page/profile.php');
            //   buttonForm.before(href);
            //   href.append(buttonForm);
            // }
            // redirect();
            // ev.preventDefault();
            debugger;
          }
        } else {
          alert('Ошибка');
        }
      }
      formSend();
    } else {
      buttonForm.setAttribute('disabled', ' ');
      setTimeout(() => {
        buttonForm.removeAttribute('disabled');
      }, 2000);
    }
  });
}

function newPassword() {
  const cross = document.querySelectorAll('.validation__cross');
  const tick = document.querySelectorAll('.validation__tick');
  const inputNewPass = document.querySelector('.new-pass__input');
  const validText = document.querySelectorAll('.validation__text');
  const crossLogin = document.querySelector('.login__cross');

  let result;

  function validationOnline() {
    inputNewPass.oninput = function loop() {
      for (let item of cross) {
        if (item.parentElement.classList.contains('new-pass__min')) {
          if (inputNewPass.value.length > 8) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__min')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__min')) {
                color.style.color = '#ff6476';
              }
            }
            result = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__min')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__min')) {
                color.style.color = '';
              }
            }
            result = false;
          }
        }
      }

      for (let item of cross) {
        if (item.parentElement.classList.contains('new-pass__symbol')) {
          let valueInput = inputNewPass.value;
          if (/\W/.test(valueInput) && !/[А-Яа-я]/.test(valueInput)) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__symbol')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__symbol')) {
                color.style.color = '#ff6476';
              }
            }
            result = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__symbol')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__symbol')) {
                color.style.color = '';
              }
            }
            result = false;
          }
        }
      }

      for (let item of cross) {
        if (item.parentElement.classList.contains('new-pass__number')) {
          let valueInput = inputNewPass.value;
          if (/\d/.test(valueInput)) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__number')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__number')) {
                color.style.color = '#ff6476';
              }
            }
            result = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__number')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__number')) {
                color.style.color = '';
              }
            }
            result = false;
          }
        }
      }

      for (let item of cross) {
        if (item.parentElement.classList.contains('new-pass__upper')) {
          let valueInput = inputNewPass.value;
          if (/[A-Z]/.test(valueInput)) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__upper')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__upper')) {
                color.style.color = '#ff6476';
              }
            }
            result = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('new-pass__upper')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('new-pass__upper')) {
                color.style.color = '';
              }
            }
            result = false;
          }
        }
      }

      crossLogin.addEventListener('click', () => {
        inputNewPass.value = '';
        loop();
      });
    };

    return result;
  }
  validationOnline();

  function validationText() {
    const parent = inputNewPass.parentElement;
    let errorLabel = document.createElement('div');
    errorLabel.textContent = 'Пароль не соответствует';
    errorLabel.classList.add('error-label');
    inputNewPass.classList.add('error');
    parent.append(errorLabel);

    setTimeout(() => {
      errorLabel.remove();
      inputNewPass.classList.remove('error');
    }, 4000);
  }

  document.querySelector('.new-pass__form').addEventListener('submit', ev => {
    if (result == true) {
      return true;
    } else {
      validationText();
      ev.preventDefault();
    }
  });
}
