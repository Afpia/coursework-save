export function checkUser() {
  const buttonUser = document.querySelector('.password__button');
  const inputUser = document.querySelector('.password__input');
  const formUser = document.querySelector('.password__form');

  function buttonBlockUser() {
    buttonUser.setAttribute('disabled', ' ');
    setTimeout(() => {
      buttonUser.removeAttribute('disabled');
    }, 2000);
  }

  function validationUser(done) {
    let result = true;

    function errorInputUser(text) {
      const parent = inputUser.parentElement;
      let errorLabel = document.createElement('div');
      errorLabel.textContent = text;
      errorLabel.classList.add('error-label');
      inputUser.classList.add('error');
      parent.append(errorLabel);
      setTimeout(() => {
        errorLabel.remove();
        inputUser.classList.remove('error');
      }, 2000);
    }

    function emailInput(inputUser) {
      return !/^\w+([\.-]?\w+)*@\w([\.-]?\w+)*(\.\w{2,8})+$/.test(inputUser.value);
    }

    if (inputUser.value == '') {
      result = false;
      errorInputUser('Пустое поле');
    } else if (emailInput(inputUser)) {
      result = false;
      errorInputUser('Неправильный ввод');
      buttonBlockUser();
    } else if (done == 1) {
      result = false;
      errorInputUser('Такого пользователя нет');
      buttonBlockUser();
    } else {
      result = true;
    }
    return result;
  }

  formUser.addEventListener('submit', ev => {
    ev.preventDefault();

    if (validationUser() == true) {
      let emailForm = document.querySelector('.login__form-input').value;

      let userNewPassword = {
        email: emailForm,
        // password: passwordForm,
      };
      async function formSend() {
        let response = await fetch('../php/restorePassword.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8',
          },
          body: JSON.stringify(userNewPassword),
        });
        if (response.ok) {
          let done = await response.json();
          if (done == 1) {
            validationUser(done);
          } else {
            const path = new String(window.location.origin);
            barba.go(`${path}/page/new.password.php`);
          }
        } else {
          alert('Ошибка');
        }
      }
      formSend();
    } else {
      buttonBlockUser();
    }
  });
}
