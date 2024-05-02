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

  let result = true;

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

  function validation() {
    // let numberTest = /^((\+7|7|8)+([0-9]){10})$/.test(telephone.value);
    // console.log(numberTest);
    for (const item of input) {
      if (item.value == '') {
        result = false;
        error(item, 'Пустое поле');
        buttonBlock();
      }
    }
    if (calendar.value.length != 10 && calendar.value != '') {
      result = false;
      error(calendar, 'Неправильная дата');
      buttonBlock();
      // debugger;
    }
    if (telephone.value != '' && telephone.value.length <= 15) {
      result = false;
      error(telephone, 'Неправильный телефон');
      buttonBlock();
    }

    if (passwordUser == false && inputNewPass.value != '') {
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

  let passwordUser = false;

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
              color.style.color = '#ff6476';
            }
          }
          passwordUser = true;
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
              passwordUser = false;
            }
          }
          passwordUser = false;
        }
      }
    }
  };
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
            color.style.color = '#ff6476';
          }
        }
        passwordUser = true;
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
        passwordUser = false;
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
            color.style.color = '#ff6476';
          }
        }
        passwordUser = true;
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
        passwordUser = false;
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
            color.style.color = '#ff6476';
          }
        }
        passwordUser = true;
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
        passwordUser = false;
      }
    }
  }
  crossLogin.addEventListener('click', () => {
    inputNewPass.value = '';
  });

  button.addEventListener('click', ev => {
    ev.preventDefault();

    if (validation() == true) {
      alert('hello');
    }
  });
}
