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
  const form = document.querySelector('.login__form');
  const buttonForm = document.getElementById('login__submit');

  function buttonBlock() {
    buttonForm.setAttribute('disabled', ' ');
    setTimeout(() => {
      buttonForm.removeAttribute('disabled');
    }, 2000);
  }

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
          buttonBlock();
        } else if (done == 1) {
          result = false;
          errorInput(input, 'Такого пользователя нет');
          buttonBlock();
        } else {
          result = true;
        }
      } else if (input.hasAttribute('data-password')) {
        if (done == 2) {
          result = false;
          errorInput(input, 'Неправильный пароль');

          buttonBlock();
        } else {
          result = true;
        }
      }
    }
    return result;
  }

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
            barba.go('http://save/page/profile.php');
          }
        } else {
          alert('Ошибка');
        }
      }
      formSend();
    } else {
      buttonBlock();
    }
  });
}

export { inputValidation, eye };
