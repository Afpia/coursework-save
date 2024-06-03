export default function signupValid() {
  const button = document.querySelector('.signup__form-submit');
  const input = document.querySelectorAll('.signup__form-input');
  const calendar = document.querySelector('.signup__form-input_calendar');
  const telephone = document.querySelector('.signup__form-input_tel');

  const cross = document.querySelectorAll('.validation__cross');
  const tick = document.querySelectorAll('.validation__tick');
  const inputNewPass = document.querySelector('.signup__input');
  const validText = document.querySelectorAll('.validation__text');
  const crossLogin = document.querySelector('.signup__cross');
  const form = document.querySelector('.signup__form');

  let result;
  let resultOnline;
  let result1;
  let result2;
  let result3;
  let result4;

  function buttonBlock() {
    button.setAttribute('disabled', ' ');
    setTimeout(() => {
      button.removeAttribute('disabled');
    }, 2000);
  }

  function error(input, text) {
    const parent = input.parentElement;
    let errorLabel = document.createElement('div');
    errorLabel.textContent = text;
    errorLabel.classList.add('signup__error-label');
    input.classList.add('signup__error');
    parent.append(errorLabel);
    setTimeout(() => {
      errorLabel.remove();
      input.classList.remove('signup__error');
    }, 2000);
  }

  function validationOnline() {
    inputNewPass.oninput = function loop() {
      for (let item of cross) {
        if (item.parentElement.classList.contains('signup__min')) {
          if (inputNewPass.value.length > 8) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__min')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__min')) {
                color.style.color = 'var(--green)';
              }
            }
            result1 = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__min')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__min')) {
                color.style.color = '';
              }
            }
            result1 = false;
          }
        }
      }
      for (let item of cross) {
        if (item.parentElement.classList.contains('signup__symbol')) {
          let valueInput = inputNewPass.value;
          if (/\W/.test(valueInput) && !/[А-Яа-я]/.test(valueInput)) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__symbol')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__symbol')) {
                color.style.color = 'var(--green)';
              }
            }
            result2 = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__symbol')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__symbol')) {
                color.style.color = '';
              }
            }
            result2 = false;
          }
        }
      }

      for (let item of cross) {
        if (item.parentElement.classList.contains('signup__number')) {
          let valueInput = inputNewPass.value;
          if (/\d/.test(valueInput)) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__number')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__number')) {
                color.style.color = 'var(--green)';
              }
            }
            result3 = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__number')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__number')) {
                color.style.color = '';
              }
            }
            result3 = false;
          }
        }
      }

      for (let item of cross) {
        if (item.parentElement.classList.contains('signup__upper')) {
          let valueInput = inputNewPass.value;
          if (/[A-Z]/.test(valueInput)) {
            item.classList.add('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__upper')) {
                iterator.classList.remove('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__upper')) {
                color.style.color = 'var(--green)';
              }
            }
            result4 = true;
          } else {
            item.classList.remove('validation__hidden');
            for (let iterator of tick) {
              if (iterator.parentElement.classList.contains('signup__upper')) {
                iterator.classList.add('validation__hidden');
              }
            }
            for (let color of validText) {
              if (color.parentElement.classList.contains('signup__upper')) {
                color.style.color = '';
              }
            }
            result4 = false;
          }
        }
      }

      crossLogin.addEventListener('click', () => {
        inputNewPass.value = '';
        loop();
      });

      if (result1 == true && result2 == true && result3 == true && result4 == true) {
        resultOnline = true;
      } else {
        resultOnline = false;
      }
    };
    return resultOnline;
  }
  validationOnline();

  function emailInput(item) {
    return !/^\w+([\.-]?\w+)*@\w([\.-]?\w+)*(\.\w{2,8})+$/.test(item.value);
  }
  // ФИО
  //([А-ЯЁ][а-яё]+[\-\s]?){3,}

  function validation(done) {
    for (let item of input) {
      if (item.value == '') {
        result = false;
        error(item, 'Пустое поле');
        buttonBlock();
      } else if (item.hasAttribute('data-signEmail')) {
        if (emailInput(item)) {
          result = false;
          error(item, 'Неправильный ввод');
          buttonBlock();
        } else if (done == 1) {
          result = false;
          error(item, 'Такой пользователь уже есть');
          buttonBlock();
        }
      } else {
        result = true;
      }
    }
    if (calendar.value.length != 10 && calendar.value != '') {
      result = false;
      error(calendar, 'Неправильная дата');
      buttonBlock();
    }
    if (telephone.value != '' && telephone.value.length <= 15) {
      result = false;
      error(telephone, 'Неправильный телефон');
      buttonBlock();
    }
    if (resultOnline == false && inputNewPass.value != '') {
      result = false;
      error(inputNewPass, 'Пароль не соответствует');
      buttonBlock();
    }
    return result;
  }

  new Cleave('.signup__form-input_calendar', {
    date: true,
    delimiter: '-',
    datePattern: ['Y', 'm', 'd'],
  });

  telephone.addEventListener('focus', () => {
    new Cleave('.signup__form-input_tel', {
      phone: true,
      prefix: '+7',
      phoneRegionCode: 'ru',
    });
  });

  function eyeSingUp() {
    const inputPassword = document.querySelector('.signup__input');
    const closeEye = document.querySelector('.signup__eyeClose');
    const eyeButton = document.querySelector('.signup__eyeClose-button');
    const eye = document.querySelector('.signup__eye');

    eyeButton.addEventListener('click', () => {
      if (inputPassword.getAttribute('type') == 'password') {
        inputPassword.setAttribute('type', 'text');
        closeEye.classList.add('signup__eye-hidden');
        eye.classList.remove('signup__eye-hidden');
      } else {
        inputPassword.setAttribute('type', 'password');
        closeEye.classList.remove('signup__eye-hidden');
        eye.classList.add('signup__eye-hidden');
      }
    });
  }
  eyeSingUp();

  form.addEventListener('submit', ev => {
    ev.preventDefault();

    if (validation() == true) {
      let passwordForm = document.querySelector('.signup__input').value;
      let FIOForm = document.querySelector('.signup__form-input_name').value;
      let emailForm = document.querySelector('.signup__form-input_mail').value;
      let dateForm = document.querySelector('.signup__form-input_calendar').value;
      let phoneForm = document.querySelector('.signup__form-input_tel').value;

      let signUp = {
        email: emailForm,
        password: passwordForm,
        full_name: FIOForm,
        phone: phoneForm,
        date_birth: dateForm,
      };

      async function formSend() {
        let response = await fetch('../php/signUp.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json;charset=utf-8',
          },
          body: JSON.stringify(signUp),
        });
        if (response.ok) {
          let done = await response.json();
          console.log(done);
          debugger;
          if (done == 1) {
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
