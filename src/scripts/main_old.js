function bodyLock(con) {
    const scrollFix = window.innerWidth - document.body.clientWidth + "px";
    if (con === true) {
      document.body.classList.add("_lock");
      document.body.style.paddingRight = scrollFix;
    } else if (con === false) {
      document.body.classList.remove("_lock");
      document.body.style.paddingRight = 0;
    } else if (con === undefined) {
      if (!body.classList.contains("_lock")) {
        document.body.classList.add("_lock");
        document.body.style.paddingRight = scrollFix;
      } else {
        document.body.classList.remove("_lock");
        document.body.style.paddingRight = 0;
      }
    } else {
      console.error("Неопределенный аргумент у функции bodyLock()");
    }
  }






class Modal {
    constructor(template = "") {
        this.modal = document.querySelector('.modal');
        this.template = template;
        this.container = document.querySelector('.modal__content-inner');
        this.init();
    }


    listenOpenTriggers() {
        this.triggers = document.querySelectorAll('[data-modal]');
        this.triggers.forEach((trigger)=>{
            trigger.addEventListener('click', () => {
                this.templateName = trigger.dataset.modal;
                
                this.openModal();
            });
        });
    }

    listenOpenTriggersModal() {
        this.triggers = this.modal.querySelectorAll('[data-modal]');
        this.triggers.forEach((trigger)=>{
            trigger.addEventListener('click', () => {
                this.templateName = trigger.dataset.modal;
                
                this.openModal();
            });
        });
    }

    listenCloseTriggers() {
        this.close = document.querySelectorAll('.modal__close');
        this.close.forEach((close) => {
            close.addEventListener('click', () => {
                this.closeModal();
            });
          });

          this.modal.addEventListener("click", (e) => {
            e = e.target;
            if(e.classList.contains('modal')) {
                this.closeModal()
            }
          });
    }

    initTemplate() {
        if(document.querySelector('.'+this.templateName)) {
            this.template = document.querySelector('.'+this.templateName);
            this.container.innerHTML = this.template.innerHTML;
        }

        
    }

    initForms() {
        if(this.modal.querySelector('form')) {
            const form = this.modal.querySelector('form').id;
            const formInit = new Form(form);
        }
    }

    openModal() {
        this.modal.classList.add('opened');
        bodyLock(true);
        this.initTemplate();
        this.initAdditionals();
        showPassword();
        this.initForms();
        this.listenCloseTriggers();
        this.listenOpenTriggersModal();
    }

    closeModal() {
        this.modal.classList.remove('opened');
        bodyLock(false);
    }

    listenCardRadio() {

        this.cardRadios = this.modal.querySelectorAll('.modal__radio input');
        this.cardRadioSmall = this.modal.querySelector('[data-cardsize="small"]');
        this.cardRadioSmall.click();
        this.cardRadios.forEach((radio) => {
            this.countChars('small');
            radio.addEventListener('change', () => {
                if(radio.dataset.cardsize=='big') {
                    this.countChars('big');
                } else if(radio.dataset.cardsize=='small') {
                    this.countChars('small');
                }
            });
        });

        
    }

    countChars(type) {

        this.textareaBig = this.modal.querySelector(".modal__textarea.textAreaBig");
        this.textareaSmall = this.modal.querySelector(".modal__textarea.textAreaSmall");

        this.textareaBigImg = this.modal.querySelector(".cardBig");
        this.textareaSmallImg = this.modal.querySelector(".cardSmall");

        
        this.counterElement = this.modal.querySelector(".modal__counter");
        this.textareaBig.value = "";
        this.textareaSmall.value = "";

        if(type=='big') {
            this.textareaBig.classList.remove('hidden');
            this.textareaSmall.classList.add('hidden');

            this.textareaBigImg.classList.remove('hidden');
            this.textareaSmallImg.classList.add('hidden');

            let countMax = 300;
            this.counterElement.textContent = "0/" + countMax;
            this.textareaBig.addEventListener('input', ()=>{
                let count = this.textareaBig.value.length;
                if(count >= countMax) {
                    this.textareaBig.value = this.textareaBig.value.slice(0, countMax);
                    count = countMax;
                }
                this.counterElement.textContent = count + "/"+countMax;
            });

        } else if(type=='small') {
            this.textareaBig.classList.add('hidden');
            this.textareaSmall.classList.remove('hidden');

            this.textareaBigImg.classList.add('hidden');
            this.textareaSmallImg.classList.remove('hidden');

            let countMax = 80;
            this.counterElement.textContent = "0/" + countMax;

            this.textareaSmall.addEventListener('input', () => {
                let count = this.textareaSmall.value.length;
                if(count >= countMax) {
                    this.textareaSmall.value = this.textareaSmall.value.slice(0, countMax);
                    count = countMax;
                }
                this.counterElement.textContent = count + "/"+countMax;
            });
        }
        
        
    }

    initSlick() {
        $('.modal__content .item__add-items').slick({
            slidesToShow: 4,
            dots: true,
            arrows: false,
            // centerMode: true,
            infinite: false,
            draggable: true,
            swipe: true,
            swipeToSlide: true,
            responsive: [
                {
                  breakpoint: 1500,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 1130,
                  settings: {
                    slidesToShow: 2

                }
                },
                {
                    breakpoint: 760,
                    settings: {
                      slidesToShow: 1.1
                      
                    }
                  }
              ]
        });

        const addSliderArrLeft = this.modal.querySelector('.item__slider-arrow.arr-left');
            addSliderArrLeft.addEventListener('click', () => {
                $('.modal__content .item__add-items').slick('slickPrev');
            });
        const addSliderArrRight = this.modal.querySelector('.item__slider-arrow.arr-right');
            addSliderArrRight.addEventListener('click', () => {
                $('.modal__content .item__add-items').slick('slickNext');
            });
    }

    addedItem() {
        this.addedImg = this.modal.querySelector('.addedItemImg');
        if(document.querySelectorAll('.item__slider-main-slide img').length > 0) {
            this.mainItemImg = document.querySelectorAll('.item__slider-main-slide img')[0].src;
            this.addedImg.src = this.mainItemImg;
        }
        

        


    }


    initAdditionals() {
        
        if(this.modal.querySelector('.modal__textarea')) {
            this.listenCardRadio();
        }

        if(this.modal.querySelector('.item__add-items')) {
            this.initSlick();
        }

        if(this.modal.querySelector('.addedItemImg')) {
            this.addedItem();
        }
    }

    init() {
        this.initAdditionals();
        this.listenOpenTriggers();
        this.listenCloseTriggers()
        
    }
}


// if(document.querySelector('.item') ) {
//     const modal = new Modal();
// }

// const modal = new Modal();








function basketCardTextareas() {
    const basketAreaSmall = document.querySelector('.basket__add .textAreaSmall');
    const basketAreaBig = document.querySelector('.basket__add .textAreaBig');
    const basketCardRadiosCard = document.querySelectorAll('.basket__add .basket__add-radio[data-radio]');
    const basketCardRadioFert = document.querySelector('.basket__add .basket__add-radio [data-fert]');
    basketCardRadioFert.checked = false;
    const basketCardCounter = document.querySelector('.basket__add .basket__add-counter');
    const basketTextAreasBlock = document.querySelector('.basket__add-textAreas');
    basketAreaSmall.value = "";
    basketAreaBig.value = "";

    initSmallCounter()

    basketCardRadiosCard.forEach(radio=>{
        radio.querySelector('input[type="radio"]').checked = false;
        
        radio.addEventListener('click', () => {
            basketAreaSmall.value = "";
            basketAreaBig.value = "";
            basketTextAreasBlock.classList.remove('hidden');
            if(radio.dataset.radio == "small") {
                basketAreaBig.classList.add('hidden');
                basketAreaSmall.classList.remove('hidden');
                initSmallCounter()

            } else if(radio.dataset.radio == "big") {
                basketAreaBig.classList.remove('hidden');
                basketAreaSmall.classList.add('hidden');
                initBigCounter()
            }
        })
    });

    function initSmallCounter() {
        
            let countMax = 80;
            basketCardCounter.textContent = "0/" + countMax;

            basketAreaSmall.addEventListener('input', () => {
            let count = basketAreaSmall.value.length;
                if(count >= countMax) {
                    basketAreaSmall.value = basketAreaSmall.value.slice(0, countMax);
                    count = countMax;
                }
            basketCardCounter.textContent = count + "/"+countMax;
        })
    }

    function initBigCounter() {
        let countMax = 300;
        basketCardCounter.textContent = "0/" + countMax;

        basketAreaBig.addEventListener('input', () => {
        let count = basketAreaBig.value.length;
            if(count >= countMax) {
                basketAreaSmall.value = basketAreaBig.value.slice(0, countMax);
                count = countMax;
            }
        basketCardCounter.textContent = count + "/"+countMax;
    })
    }
}

if(document.querySelector('.basket__add')) {
    basketCardTextareas();
}














class MobMenu {
    constructor() {
        this.burger = document.querySelector('.burger');
        this.menu = document.querySelector('.mob-menu');
        this.overlay = document.querySelector('.overlay');
        this.menuOpened = false;
        this.init();
    }

    openMenu() {
        this.menu.classList.add('mob-active');
        this.overlay.classList.add('overlay-active')
        this.burger.classList.add('active-burger');
        document.body.classList.add('_locked');
        this.menuOpened = true;

    }

    closeMenu() {
        this.menu.classList.remove('mob-active');
        this.overlay.classList.remove('overlay-active')
        this.burger.classList.remove('active-burger');
        document.body.classList.remove('_locked');
        this.menuOpened = false;
    }

    triggerOpen() {
        this.burger.addEventListener('click', () => {
            if(!this.menuOpened) {
                this.openMenu();
            } else {
                this.closeMenu();
            }
            
        })

        this.overlay.addEventListener('click', () => {
            this.closeMenu();
        })
    }


    init() {
        this.triggerOpen()
    }
}

// const mobmenu = new MobMenu();





function cropText() {
    const elementsToCrop = document.querySelectorAll('[data-crop]');
    
    elementsToCrop.forEach(element => {
      const text = element.textContent;
      if (text.length > 30) {
        const croppedText = text.substring(0, 30).trim() + '...';
        element.textContent = croppedText;
      }
    });
  }

  cropText()


  function showPassword() {
    const passwords = document.querySelectorAll('.eyes');

    if(passwords.length > 0) {
        passwords.forEach(el=> {
            el.addEventListener('click', () => {
                const input = el.parentNode.querySelector('.modal__input');
                if(el.classList.contains('active')) {
                    input.setAttribute('type', 'password');
                    el.classList.remove('active');
                } else {
                    input.setAttribute('type', 'text');
                    el.classList.add('active');
                }
                
            })
        })
    }


  }

//   showPassword()




class Form {
    constructor(form) {

        this.form = document.getElementById(form);
        this.init()

    }

    deleteErrors() {
        const errors = this.form.querySelectorAll('._error-txt');
        errors.forEach((el) => {
          const parent = el.parentNode;
          parent.removeChild(el);
        });
    
    
        const inputs = this.form.querySelectorAll('input[type=text], input[type=tel], input[type=password]');
        inputs.forEach((input) => {
          input.classList.remove('_error-input');
        });

        if(this.form.querySelector('.error-wrap')) {
            this.form.querySelectorAll('.error-wrap').forEach(el=>el.textContent="");
        }

        if(this.form.id=='lk-form') {
            const oldPassWrongWrap = this.form.querySelector('.oldpass-error-wrap');
            oldPassWrongWrap.textContent = "";
        }
    }

    createErrAuth() {

            if(this.form.id == "auth-form") {

            const inputs = this.form.querySelectorAll('.modal__input').forEach(el=>{
                el.classList.add('_error-input');
            })

            let errorName = "Не правильный логин или пароль";
            let errorEl = document.createElement('span');
            errorEl.textContent = errorName;
            errorEl.classList.add('_error-txt');
            const errWrap = this.form.querySelector('.error-wrap');

            errWrap.appendChild(errorEl);
        }

    }

    createError(err) {

        if(this.form.id == "callback-form" || 1) {
       
            let errorName = "Обязательное поле";
        
            err.forEach((el) => {
                const inputWrap = el.closest('.input-wrap');
                let errorEl = document.createElement('span');
                errorEl.textContent = errorName;
                errorEl.classList.add('_error-txt');
                el.classList.add('_error-input');
                inputWrap.appendChild(errorEl);
        
            });

      } 

    }

    validateForm() {
        const requiredInputs = this.form.querySelectorAll('[data-required]');
        

        let errorArr = [];

        this.deleteErrors();

        requiredInputs.forEach(el => {
            const value = el.value.trim();
            if(value === "") {
                errorArr.push(el);
            }
        })


        if(errorArr.length > 0) {
        this.createError(errorArr);
        
        return false;
        } else {
        return true;
        }

    }

    validatePasswords() {
        const passFields = this.form.querySelectorAll('[data-newpass]');
        const passErrWrap = this.form.querySelector('.pass-error-wrap');

        let legitPass = passFields[0].value == passFields[1].value;

        const minLength = 8;
        const MaxLength = 25;

        const pass = passFields[0].value;
        const hasLetterAndNumber = /^(?=.*[a-zA-Z])(?=.*[0-9])/.test(pass);
        const isValidFormat = /^[a-zA-Z0-9]+$/.test(pass);

        const passwordLength = pass.length;
        const isLengthValid = passwordLength >= minLength && passwordLength <= MaxLength;


        passFields.forEach(el=>el.classList.remove('_error-input'));

        if(!legitPass) {
            
                let errorName = "Пароли не совпадают";
                let errorEl = document.createElement('span');
                errorEl.textContent = errorName;
                errorEl.classList.add('_error-txt');

                passFields.forEach(el=>el.classList.add('_error-input'));

                passErrWrap.appendChild(errorEl);

                return false;
            } else if(!isValidFormat || !isLengthValid || !hasLetterAndNumber ) {
                let errorName = "Пароль должен быть 8-25 символов";
                let errorEl = document.createElement('span');
                errorEl.textContent = errorName;
                errorEl.classList.add('_error-txt');
                passErrWrap.appendChild(errorEl);

                errorName = "содержать латинские буквы и цифры";
                errorEl = document.createElement('span');
                errorEl.textContent = errorName;
                errorEl.classList.add('_error-txt');
                passErrWrap.appendChild(errorEl);
    
                passFields.forEach(el=>el.classList.add('_error-input'));
    
                
                return false;
            } else {
                return true;
            }
    }

    oldPassWrong() {
        if(this.form.id == 'lk-form') {
            
            const oldPassWrongWrap = this.form.querySelector('.oldpass-error-wrap');
            const oldPassInput = oldPassWrongWrap.parentNode.querySelector('.profile__input');

            let errorName = "Пароль не верный";
            let errorEl = document.createElement('span');
            errorEl.textContent = errorName;
            errorEl.classList.add('_error-txt');
            oldPassWrongWrap.appendChild(errorEl);
            oldPassInput.classList.add('_error-input');
        }
    }



    policyChecked() {
        const check = this.form.querySelector('.profile__checkbox-input');
        const chechErr = this.form.querySelector('.policy-err');
        if(!check.checked) {
            let errorName = "Ознакомьтесь с политикой конфиденциальности";
            let errorEl = document.createElement('span');
            errorEl.textContent = errorName;
            errorEl.classList.add('_error-txt');
            chechErr.appendChild(errorEl);

            return false
        } else {
            return true
        }
    }

    validateEmail() {
        const emailInput = this.form.querySelector('input[name=email]');
        const email = emailInput.value;
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let validEmail = emailPattern.test(email);
        if(!validEmail) {
            console.log('email not val');
            const errorName = "Введите верный Email";
            const inputWrap = emailInput.closest('.input-wrap');
            let errorEl = document.createElement('span');
            errorEl.textContent = errorName;
            errorEl.classList.add('_error-txt');
            emailInput.classList.add('_error-input');
            inputWrap.appendChild(errorEl);
            return false;
        } else {
            return true;
        }
    }

    createSuccsessMsg() {
        if(this.form.id == 'lk-form') {
            console.log(this.form.id);
        
        const succsessWrap = this.form.querySelector('.profile-succsess-msg');
        succsessWrap.textContent = "Изменения успешно внесены";

        } else if(this.form.id == 'reg-form') {
            document.querySelector('.regThanksLink').click();
        } if(this.form.id == 'callback-form') {
            document.querySelector('.callbackThanksLink').click();
        }
    }


    listenSubmit() {

        this.form.addEventListener('submit', (e) => {
            e.preventDefault();

            if(!this.validateForm()) {
                return;
              }

              if(this.form.querySelector('input[name=email]') && this.form.querySelector('input[name=email]').value != "") {
                if(!this.validateEmail()) {
                    return;
                  }
              }

            if(this.form.id == "reg-form" || this.form.id == "lk-form") {
                if(!this.validatePasswords()) {
                    return;
                  }
    
            }

            if(this.form.id == "reg-form") {
                var captcha = grecaptcha.getResponse();

                if (!captcha.length) {
                    console.log(1);
                    $('#recaptchaError').text('* Вы не прошли проверку капчей');
                } else {
                    console.log(2);
                    $('#recaptchaError').text('');
                }
            }

            if(this.form.id == "lk-form") {
                if(!this.policyChecked()) {
                    return;
                  }
            }

            const xhr = new XMLHttpRequest();
            let formData = new FormData(this.form);
            console.log(formData);
            console.log('send form data');
    
            if(this.form.id == 'order-form') {
                xhr.open('POST', 'local/ajax/order.php');
            
            } else if(this.form.id =='auth-form') {

                xhr.open('POST', '/local/ajax/auth.php');

            } else if(this.form.id =='reg-form') {

                xhr.open('POST', '/local/ajax/reg.php');

            } else if(this.form.id =='callback-form') {

                xhr.open('POST', '/local/ajax/callback.php');

            } else if(this.form.id =='lk-form') {

                xhr.open('POST', '/local/ajax/lk.php');

            } else if(this.form.id =='restore-form') {

                xhr.open('POST', '/local/ajax/restore.php');
            } else {
                xhr.open('POST', '/local/ajax/test.php');
            }
              
            xhr.onload = () => {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                } else if(xhr.responseText=="noauth"){
                    console.error('Ошибка: ', xhr.status);
                    this.createErrAuth();
                } else if(xhr.responseText=="oldpasswrong") {
                    this.oldPassWrong();
                } else {
                    this.createSuccsessMsg();
                    console.log(xhr.responseText);
                }
            };

            xhr.send(formData);
            this.form.classList.add('sent');
            this.form.reset();

        });
    }

    maskInit() {
        if(this.form.querySelector('input[name=phone]')) {
        
        const phoneInput = this.form.querySelector('input[name=phone]');
        const maskOptions = {
          mask: '+{7}(000) 000-00-00'
        };
    
        const mask = IMask(phoneInput, maskOptions);
        }

        if(this.form.querySelector('input[name=date]')) {
        
            const dateInput = this.form.querySelector('input[name=date]');
            const maskOptions = {
                mask: Date,
                min: new Date(1990, 0, 1),
                max: new Date(2020, 0, 1),
                lazy: false
            };
        
            const mask = IMask(dateInput, maskOptions);
        }
    
        if(this.form.querySelector('input[name=time]')) {
        
            const timeInput = this.form.querySelector('input[name=time]');
            const maskOptions = {
                overwrite: true,
                autofix: true,
                mask: 'HH:MM',
                blocks: {
                    HH: {
                    mask: IMask.MaskedRange,
                    placeholderChar: 'HH',
                    from: 0,
                    to: 23,
                    maxLength: 2
                    },
                    MM: {
                    mask: IMask.MaskedRange,
                    placeholderChar: 'MM',
                    from: 0,
                    to: 59,
                    maxLength: 2
                    }
                }
            };
        
            const mask = IMask(timeInput, maskOptions);
        }




    }

    init() {
        this.listenSubmit();
        this.maskInit();
    }
}

// if(document.querySelector('.item')) {
   
//     formItem = new Form('item-form');
// }


// document.querySelectorAll('form').forEach(el => {
//     if(el.id) {
//         const form = new Form(el.id);
//     }
    
// })


