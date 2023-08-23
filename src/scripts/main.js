function logosSlider() {
    const logoSlider = new Swiper('.logos-slider', {
        slidesPerView: 4.5,
        spaceBetween: 20,
        freeMode: true,
        loop: true,
        autoplay: {
            delay: 1,
            disableOnInteraction: false
          },
          speed: 3000,
          breakpoints: {  
            '500': {
              slidesPerView: 4.5,
              spaceBetween: 20, },
            '700': {
              slidesPerView: 4.5,
              spaceBetween: 30, },
            '1000': {
              slidesPerView: 6.5,
              spaceBetween: 60, },
            '1300': {
              slidesPerView: 8.5,
              spaceBetween: 80, },
          },
      });
      
}

logosSlider();

function teamSlider() {

  if(document.querySelector('.team__slider')) {
    const teamSlider = new Swiper('.team__slider', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
          },
          speed: 1000,
          breakpoints: {  
            '450': {
              slidesPerView: 2.5,
              spaceBetween: 40, },
            '600': {
              slidesPerView: 3.5,
              spaceBetween: 40, },
            '800': {
              slidesPerView: 3.5,
              spaceBetween: 60, },
            '1000': {
              slidesPerView: 3.5,
              spaceBetween: 60, },
            '1500': {
              slidesPerView: 4.5,
              spaceBetween: 125, },
          },
      });

      const arrPrev = document.querySelector('.team__arrs .arr-l');
      const arrNext = document.querySelector('.team__arrs .arr-r');

      arrPrev.addEventListener('click', () => {
        teamSlider.slidePrev();
      })
      
      arrNext.addEventListener('click', () => {
        teamSlider.slideNext();
      })
    }
      
}



teamSlider()


function certSlider() {
  if(document.querySelector('.cert__slider')) {
  const certSlider = new Swiper('.cert__slider', {
      slidesPerView: 1.5,
      spaceBetween: 10,
      loop: true,
      autoplay: {
          delay: 4000,
          disableOnInteraction: false
        },
        speed: 1000,
        breakpoints: {  
          '1000': {
            slidesPerView: 1.5,
            spaceBetween: 20, },
          '1250': {
            slidesPerView: 2.5,
            spaceBetween: 20, },
          '1500': {
            slidesPerView: 3,
            spaceBetween: 32, },
          '1700': {
            slidesPerView: 3.5,
            spaceBetween: 32, },
        },
    });

    const arrPrev = document.querySelector('.cert__arrs .arr-l');
    const arrNext = document.querySelector('.cert__arrs .arr-r');

    arrPrev.addEventListener('click', () => {
      certSlider.slidePrev();
    })
    
    arrNext.addEventListener('click', () => {
      certSlider.slideNext();
    })
  }
    
}


certSlider()



class MobMenu {
  constructor() {
    this.burger = document.querySelector('.burger');
    this.menu = document.querySelector('.mob-menu');
    this.header = document.querySelector('.header');
    this.isOpen = false;

    this.init();
  }

  listenFixed() {
    window.addEventListener("scroll", () => {
      if(document.documentElement.scrollTop > 0) {
        this.header.classList.add("fixedHeader");
      } else {
        this.header.classList.remove("fixedHeader");
      }
    });
  }

  listenBurger() {
    this.burger.addEventListener('click', () => {
      if(this.isOpen) {
        this.burger.classList.remove('active-burger');
        this.close();
        this.isOpen = false;
      } else {
        this.burger.classList.add('active-burger');
        this.open();
        this.isOpen = true;
      }
        
    })
  }


  open() {
    document.body.classList.add('_locked');
    this.menu.classList.add('active-menu');
  }

  close() {
    document.body.classList.remove('_locked');
    this.menu.classList.remove('active-menu');
  }



  init() {
    this.listenFixed();
    this.listenBurger();
  }
}

const mobMenu = new MobMenu();



function cropText() {
  const elementsToCrop = document.querySelectorAll('[data-crop]');
  
  elementsToCrop.forEach(element => {
    const text = element.textContent,
          length = element.dataset.crop;

    if (text.length > length) {
      const croppedText = text.substring(0, length).trim() + '...';
      element.textContent = croppedText;
    }
  });
}

cropText()


function certSpoiler() {
  const certSpoilers = document.querySelectorAll('.cert__spoiler .more');
  const certClose = document.querySelectorAll('.cert__close');

  certSpoilers.forEach(el => {
    el.addEventListener('click', () => {
      el.closest('.cert__item').classList.add('showed');
    })
  })

  certClose.forEach(el => {
    el.addEventListener('click', () => {
      el.closest('.cert__item').classList.remove('showed');
    })
  })
}

certSpoiler();


function dropDown() {
  const dropdownTitle = document.querySelectorAll('.dropdown__title');
  const dropdownContent = document.querySelectorAll('.dropdown__content');

  dropdownTitle.forEach(el => {
    el.addEventListener('click', () => {
      let state = el.closest('.dropdown').classList.contains('expanded');
      if(state) {
        el.closest('.dropdown').classList.remove('expanded');
      } else {
        el.closest('.dropdown').classList.add('expanded');
      }
        
    })
    
  })

  


}

dropDown()



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
        
          trigger.addEventListener('click', (e) => {
              e.preventDefault();
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
          if(this.container.querySelector('input[type=file]')) {
            formAttach();
          }
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
      this.initForms();
      this.listenCloseTriggers();
      this.listenOpenTriggersModal();
  }

  closeModal() {
      this.modal.classList.remove('opened');
      bodyLock(false);
  }




  init() {
      this.listenOpenTriggers();
      this.listenCloseTriggers()
      
  }
}




const modal = new Modal();


function formAttach() {

  document.querySelectorAll('.modal__attach input[type=file]').forEach((el)=>{
    el.addEventListener('change', function() {
      console.log(2);
    const file = this.files[0];
    const parent = this.parentNode;
    const textElement = parent.querySelector('.modal__attach-text');
    console.log(file.name);
    textElement.innerHTML = file.name;
    if (file && file.size > 10 * 1024 * 1024) {
      textElement.innerHTML = 'Максимальный размер файла 10Мб';
      textElement.classList.add('_error');
      console.log('max file size');
    } else {
      textElement.innerHTML = file ? file.name : '';
      textElement.classList.remove('_error');
      
    }
  });
})
}

formAttach();









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


  policyChecked() {

      const check = this.form.querySelector('.policy__checkbox-input');
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

      if(this.form.id == 'vacancy-form') {
          document.querySelector('.thanksVakancyLink').click();
      } if(this.form.id == 'callback-form') {
          document.querySelector('.thanksCallbackLink').click();
      }
  }


  listenSubmit() {

      this.form.addEventListener('submit', (e) => {
          e.preventDefault();

          if(!this.validateForm()) {
              return;
            }

          if(!this.policyChecked()) {
              return;
            }



          const xhr = new XMLHttpRequest();
          let formData = new FormData(this.form);
          console.log(formData);
          console.log('send form data');
  
          if(this.form.id == 'vacancy-form') {
              xhr.open('POST', 'local/ajax/vacancy.php');
          
          } else if(this.form.id =='callback-form') {

              xhr.open('POST', '/local/ajax/callback.php');

          } 
            
          xhr.onload = () => {
              if (xhr.status === 200) {
                  console.log(xhr.responseText);
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
  }

  init() {
      this.listenSubmit();
      this.maskInit();
  }
}

