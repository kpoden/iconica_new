function logosSlider() {
    const swiper = new Swiper('.logos-slider', {
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


class MobMenu {
  constructor() {
    this.burger = document.querySelector('.burger');
    this.menu = document.querySelector('.mob-menu');
    this.isOpen = false;

    this.init();
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