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
        // autoplay: {
        //     delay: 3000,
        //     disableOnInteraction: false
        //   },
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






function certSlider() {
  if(document.querySelector('.cert__slider')) {
  const certSlider = new Swiper('.cert__slider', {
      slidesPerView: 1.5,
      spaceBetween: 10,
      loop: true,
      // autoplay: {
      //     delay: 4000,
      //     disableOnInteraction: false
      //   },
        speed: 1000,
        breakpoints: {  
          '500': {
            slidesPerView: 2,
            spaceBetween: 20, },
          '700': {
            slidesPerView: 2.5,
            spaceBetween: 20, },
          '1000': {
            slidesPerView: 3,
            spaceBetween: 32, },
          '1500': {
            slidesPerView: 3.5,
            spaceBetween: 32, },
        },
    });

    const arrPrev = document.querySelector('.cert__arrs .arr-l');
    const arrNext = document.querySelector('.cert__arrs .arr-r');

    arrPrev.addEventListener('click', () => {
      teamSlider.slidePrev();
    })
    
    arrNext.addEventListener('click', () => {
      teamSlider.slideNext();
    })
  }
    
}






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