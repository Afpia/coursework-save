function newPassword() {
  const cross = document.querySelectorAll('.validation__cross');
  const tick = document.querySelectorAll('.validation__tick');
  const inputNewPass = document.querySelector('.new-pass__input');
  const validText = document.querySelectorAll('.validation__text');
  const crossLogin = document.querySelector('.new-pass__cross');
  const submitButton = document.querySelector('.new-pass__form-submit');

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
                color.style.color = 'rgb(123 214 130)';
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
                color.style.color = 'rgb(123 214 130)';
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
                color.style.color = 'rgb(123 214 130)';
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
                color.style.color = 'rgb(123 214 130)';
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
    }, 2000);
  }

  function buttonBlock() {
    submitButton.setAttribute('disabled', ' ');
    setTimeout(() => {
      submitButton.removeAttribute('disabled');
    }, 2000);
  }

  document.querySelector('.new-pass__form').addEventListener('submit', ev => {
    ev.preventDefault();

    if (result == true) {
      return true;
    } else {
      buttonBlock();
      validationText();
    }
  });

  function eyeNewPass() {
    const inputPassword = document.querySelector('.new-pass__input');
    const closeEye = document.querySelector('.new-pass__eyeClose');
    const eyeButton = document.querySelector('.new-pass__eyeClose-button');
    const eye = document.querySelector('.new-pass__eye');
    const cross = document.querySelector('.new-pass__cross');

    eyeButton.addEventListener('click', () => {
      if (inputPassword.getAttribute('type') == 'password') {
        inputPassword.setAttribute('type', 'text');
        closeEye.classList.add('new-pass__eye-hidden');
        eye.classList.remove('new-pass__eye-hidden');
      } else {
        inputPassword.setAttribute('type', 'password');
        closeEye.classList.remove('new-pass__eye-hidden');
        eye.classList.add('new-pass__eye-hidden');
      }
    });
  }
  eyeNewPass();
}
export { newPassword };
