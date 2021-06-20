const swiper = new Swiper('.swiper-container', {
direction: 'horizontal',
loop: true,
slidesPerView: 1,
speed: 400,

pagination: {
    el: '.swiper-pagination',
},
navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
breakpoints: {
    400: {
    slidesPerView: 1,
    centeredSlides: false,
    },
    920: {
        slidesPerView: 2,
        spaceBetween: 30
    },
    1155: {
    slidesPerView: 3,
    },
}
});

// header
let header = document.querySelector('.header');

document.addEventListener('scroll', () => {
    if (document.documentElement.scrollTop > 1) {
        header.classList.add('header_has-bg');
    } else {
        header.classList.remove('header_has-bg');
    }
});

// form select 
const formDropdownButtons = document.querySelectorAll('.form__dropdown-button');
const formDropdownLists = document.querySelectorAll('.form__dropdown-list');
const formDropdownItem = document.querySelectorAll('.form__dropdown-item');
const timeInput = document.getElementById('time-input');
const form = document.querySelector('.form');
const switchCheckbox = document.querySelector('.switch__checkbox');
const formButton = document.querySelector('.form__button');
const htmlEl = document.querySelector('html');

// слушатель на вставку текста первого элемента списка options в кнопку select при загрузке контента

// document.addEventListener('DOMContentLoaded', () => {
//     if (!localStorage.mode || localStorage.mode === 'light') {
//         localStorage.mode = 'light';
//         htmlEl.dataset.mode = 'light';  
//         switchCheckbox.checked = false;
//     } else {
//         localStorage.mode = 'dark';
//         htmlEl.dataset.mode = 'dark';  
//         switchCheckbox.checked = true;
//     }

//     timeInput.innerHTML =  timeInput.nextElementSibling.firstElementChild.textContent;
// })

// слушатель на открытие и закрытие options по нажатию на select, а также закрытию optinons, если клик еще раз по тому же options

// formDropdownButtons.forEach(elem => {
    
//     elem.addEventListener('click', (e) => {
//         let target = e.target;

//         if (!target.nextElementSibling.classList.contains('form__dropdown-list_visible')) {
//             formDropdownLists.forEach(el => el.classList.remove('form__dropdown-list_visible'));
//             target.nextElementSibling.classList.add('form__dropdown-list_visible');
//         } else {
//             target.nextElementSibling.classList.remove('form__dropdown-list_visible');
//         }

//     });
// });

// слушатель на перезаписывание текста select из выбранного option и закрытие options

// formDropdownItem.forEach(elem => {
//     elem.addEventListener('click', (e) => {
//         e.stopPropagation();
//         elem.closest('.form__dropdown-wrap').firstElementChild.textContent = e.target.textContent;
//         elem.closest('.form__dropdown-list').classList.remove('form__dropdown-list_visible');
//     });
// });

// слушатель на закрытие options, если нажатие вне кнопки происходит

// document.addEventListener('click', (e) => {
//     if (!e.target.classList.contains('form__dropdown-button')) {
//         formDropdownLists.forEach(elem => {
//             if (elem.classList.contains('form__dropdown-list_visible')) {
//                 elem.classList.remove('form__dropdown-list_visible');
//             }
//         });
//     }
// }); 

// слушатель на закрытие options по кнопке ESC и переход фокуса на след елемент по Tab

// document.addEventListener('keydown', (e) => {
//     if (e.key === 'Tab' || e.key === 'Escape') {
//         formDropdownLists.forEach(elem => {
//             if (elem.classList.contains('form__dropdown-list_visible')) {
//                 elem.classList.remove('form__dropdown-list_visible');
//             }
//         });
//     }
// });


// change color theme

let switchInput = document.querySelector('.switch');

switchInput.addEventListener('change', () => {

    
    
    if (switchCheckbox.checked == false) {
        localStorage.mode = 'light';
        htmlEl.dataset.mode = 'light';
    } else {
        localStorage.mode = 'dark';
        htmlEl.dataset.mode = 'dark';   
    };
});

// form validation

const emailRegEx = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const telRegEx = /^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$/;
const formNameEl = document.getElementById('name');
const formEmailEl = document.querySelector('.form__input[type=email]');
const formTelEl = document.querySelector('.form__input[type=tel]');
const formInputCheckbox = document.querySelector('.form__input-checkbox');


// form.addEventListener('submit', (e) => {
//     e.preventDefault();

//     isNameCheck();
//     isMailCheck();
//     isTelCheck();
//     isCheckBoxCheck();
// }); 

// formNameEl.addEventListener('blur', () => {
//     isNameCheck();
// }); 

// formEmailEl.addEventListener('blur', () => {
//     isMailCheck();
// }); 

// formTelEl.addEventListener('blur', () => {
//     isTelCheck();
// }); 

function isNameCheck() {
    if (formNameEl.value.trim().length <= 0) {
        formNameEl.classList.add('error');
        formNameEl.nextElementSibling.classList.add('active');
    } else {
        formNameEl.classList.remove('error')
        formNameEl.nextElementSibling.classList.remove('active');
    } 
}

function isMailCheck() {
    let isMailChecked = emailRegEx.test(formEmailEl.value);
    if  (!isMailChecked) { 
        formEmailEl.classList.add('error');
        formEmailEl.nextElementSibling.classList.add('active');
    } else {
        formEmailEl.classList.remove('error');
        formEmailEl.nextElementSibling.classList.remove('active');
    }
}

function isTelCheck() {
    let isTelChecked = telRegEx.test(formTelEl.value);
    !isTelChecked ?  formTelEl.classList.add('error') : formTelEl.classList.remove('error');
    
    if  (!isTelChecked) { 
        formTelEl.classList.add('error')
        formTelEl.nextElementSibling.classList.add('active');
    } else {
        formTelEl.classList.remove('error')
        formTelEl.nextElementSibling.classList.remove('active');
    }
}

function isCheckBoxCheck() {
    if (!formInputCheckbox.checked) {
        formInputCheckbox.nextElementSibling.classList.add('error');
    } else {
        formInputCheckbox.nextElementSibling.classList.remove('error');
    }
}



let appoinForm = document.querySelector( '.appointment__form-wrap .wpcf7' );
let modalBg = document.querySelector( '.modal-bg' );
let modalClose = document.querySelector( '.modal__close' );

appoinForm.addEventListener( 'wpcf7mailsent', () => {
  modalBg.classList.add('bg-active');
}, false );

modalClose.addEventListener('click', () => {
  modalBg.classList.remove('bg-active');
})