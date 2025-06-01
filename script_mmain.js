// const slider = document.querySelector('#slider')
// const sliderItems = Array.from(slider.children);
// const btnNext = document.querySelector('#btnNext');
// const btnPrev = document.querySelector('#btnPrev');

// sliderItems.forEach(function (slide, index) {
    

//     if(index !== 0){
//         slide.classList.add('hidden')
//     }

//     slide.dataset.index = index;

//     sliderItems[0].setAttribute('data-active','');


//     slide.addEventListener('click', function(){
//         slide.classList.add('hidden');
//         slide.removeAttribute('data-active');

//         const nextSlideIndex = index + 1 === sliderItems.length ? 0 : index +1;
        

//         const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
//         nextSlide.classList.remove('hidden');
//         nextSlide.setAttribute('data-active','')
//     })
// })

// btnNext.onclick = function(){
//     const currentSlide = slider.querySelector('[data-active]');
//     const currentSlideIndex = +currentSlide.dataset.index;

//     currentSlide.classList.add('hidden');
//     currentSlide.removeAttribute('data-active');

//     const nextSlideIndex = currentSlideIndex + 1 === sliderItems.length ? 0 : currentSlideIndex +1;
//     const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
//     nextSlide.classList.remove('hidden');
//     nextSlide.setAttribute('data-active','');


// }

// btnPrev.onclick = function(){
//     const currentSlide = slider.querySelector('[data-active]');
//     const currentSlideIndex = +currentSlide.dataset.index;

//     currentSlide.classList.add('hidden');
//     currentSlide.removeAttribute('data-active');

//     const nextSlideIndex = currentSlideIndex === 0 ? sliderItems.length - 1 : currentSlideIndex -1;
    
//     const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
//     nextSlide.classList.remove('hidden');
//     nextSlide.setAttribute('data-active','');

    
// }

// btn_menu = document.querySelector('#menu_btn');
// menu_wrap = document.querySelector('#menu_wrap');
// content = document.querySelector('#content');

// btn_menu.onclick = function(){
//     menu_wrap.classList.toggle('menu_active');
//     content.classList.toggle('content_active')
// }

// let day_add = 2;
// let new_date = new Date(Date.now() + day_add*24*60*60*1000);
// const monthName = new_date.toLocaleString('default', { month: 'long' });


// let day_add2 = 3;
// let new_date2 = new Date(Date.now() + day_add2*24*60*60*1000);
// const monthName2 = new_date2.toLocaleString('default', { month: 'long' });


// let day_add3 = 4;
// let new_date3 = new Date(Date.now() + day_add3*24*60*60*1000);
// const monthName3 = new_date3.toLocaleString('default', { month: 'long' });


// let day_add4 = 5;
// let new_date4 = new Date(Date.now() + day_add4*24*60*60*1000);
// const monthName4 = new_date4.toLocaleString('default', { month: 'long' });


// function getWeekDay(new_date) {
//     let days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'];
  
//     return days[new_date.getDay()];
// }

// function getWeekDay(new_date2) {
//     let days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'];
  
//     return days[new_date2.getDay()];
// }

// function getWeekDay(new_date3) {
//     let days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'];
  
//     return days[new_date3.getDay()];
// }

// function getWeekDay(new_date4) {
//     let days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'];
  
//     return days[new_date4.getDay()];
// }

// document .getElementById("tommorow").innerHTML=(getWeekDay(new_date))+", "+new_date.getDate()+" "+ monthName;
// document .getElementById("tommorow2").innerHTML=(getWeekDay(new_date2))+", "+new_date2.getDate()+" "+ monthName2;
// document .getElementById("tommorow3").innerHTML=(getWeekDay(new_date3))+", "+new_date3.getDate()+" "+ monthName3;
// document .getElementById("tommorow4").innerHTML=(getWeekDay(new_date4))+", "+new_date4.getDate()+" "+ monthName4;



// items = document.querySelectorAll('.film_promo_card');
// document.querySelector('.list').addEventListener('click', event =>{
//     if(event.target.tagName !== 'LI') return false;
//     let filterClass = event.target.dataset['id'];
    
//     items.forEach(elem =>{
//         elem.classList.remove('hidden');
//         if(!elem.classList.contains(filterClass)){
//            elem.classList.add('hidden') ;
//         }
//     })
// });

// // Предположим, фильмы хранятся в filmsData (можно загрузить через fetch)
// let selectedDate = null;

// function renderFilmsByDate(dateStr) {
//     selectedDate = dateStr;
//     fetch('films.json') // если у тебя PHP отдает этот JSON, можешь указать свой путь
//         .then(response => response.json())
//         .then(films => {
//             const container = document.querySelector('#film'); // это div, куда добавляются карточки
//             container.innerHTML = ''; // очистим

//             films.forEach(film => {
//                 if (film.показы && film.показы.includes(dateStr)) {
//                     const card = document.createElement('div');
//                     card.classList.add('film_promo_card');
//                     card.innerHTML = `
//                         <img src="${film.постер}" alt="${film.название}">
//                         <h3>${film.название}</h3>
//                         <p>${film.жанр}</p>
//                         <p>${film.описание}</p>
//                     `;
//                     container.appendChild(card);
//                 }
//             });
//         });
// }
// document.getElementById("tommorow").addEventListener("click", () => {
//     renderFilmsByDate("2025-06-02");
// });
// document.getElementById("tommorow2").addEventListener("click", () => {
//     renderFilmsByDate("2025-06-03");
// });
// document.getElementById("tommorow3").addEventListener("click", () => {
//     renderFilmsByDate("2025-06-04");
// });
// document.getElementById("tommorow4").addEventListener("click", () => {
//     renderFilmsByDate("2025-06-05");
// });


const slider = document.querySelector('#slider')
const sliderItems = Array.from(slider.children);
const btnNext = document.querySelector('#btnNext');
const btnPrev = document.querySelector('#btnPrev');

sliderItems.forEach(function (slide, index) {
    if (index !== 0) {
        slide.classList.add('hidden')
    }

    slide.dataset.index = index;
    sliderItems[0].setAttribute('data-active', '');

    slide.addEventListener('click', function () {
        slide.classList.add('hidden');
        slide.removeAttribute('data-active');

        const nextSlideIndex = index + 1 === sliderItems.length ? 0 : index + 1;
        const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
        nextSlide.classList.remove('hidden');
        nextSlide.setAttribute('data-active', '')
    })
})

btnNext.onclick = function () {
    const currentSlide = slider.querySelector('[data-active]');
    const currentSlideIndex = +currentSlide.dataset.index;

    currentSlide.classList.add('hidden');
    currentSlide.removeAttribute('data-active');

    const nextSlideIndex = currentSlideIndex + 1 === sliderItems.length ? 0 : currentSlideIndex + 1;
    const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
    nextSlide.classList.remove('hidden');
    nextSlide.setAttribute('data-active', '');
}

btnPrev.onclick = function () {
    const currentSlide = slider.querySelector('[data-active]');
    const currentSlideIndex = +currentSlide.dataset.index;

    currentSlide.classList.add('hidden');
    currentSlide.removeAttribute('data-active');

    const nextSlideIndex = currentSlideIndex === 0 ? sliderItems.length - 1 : currentSlideIndex - 1;
    const nextSlide = slider.querySelector(`[data-index="${nextSlideIndex}"]`);
    nextSlide.classList.remove('hidden');
    nextSlide.setAttribute('data-active', '');
}

btn_menu = document.querySelector('#menu_btn');
menu_wrap = document.querySelector('#menu_wrap');
content = document.querySelector('#content');

btn_menu.onclick = function () {
    menu_wrap.classList.toggle('menu_active');
    content.classList.toggle('content_active');
}

// Даты
let day_add = 2;
let new_date = new Date(Date.now() + day_add * 24 * 60 * 60 * 1000);
const monthName = new_date.toLocaleString('default', { month: 'long' });

let day_add2 = 3;
let new_date2 = new Date(Date.now() + day_add2 * 24 * 60 * 60 * 1000);
const monthName2 = new_date2.toLocaleString('default', { month: 'long' });

let day_add3 = 4;
let new_date3 = new Date(Date.now() + day_add3 * 24 * 60 * 60 * 1000);
const monthName3 = new_date3.toLocaleString('default', { month: 'long' });

let day_add4 = 5;
let new_date4 = new Date(Date.now() + day_add4 * 24 * 60 * 60 * 1000);
const monthName4 = new_date4.toLocaleString('default', { month: 'long' });

function getWeekDay(date) {
    let days = ['ВС', 'ПН', 'ВТ', 'СР', 'ЧТ', 'ПТ', 'СБ'];
    return days[date.getDay()];
}

document.getElementById("tommorow").innerHTML = getWeekDay(new_date) + ", " + new_date.getDate() + " " + monthName;
document.getElementById("tommorow2").innerHTML = getWeekDay(new_date2) + ", " + new_date2.getDate() + " " + monthName2;
document.getElementById("tommorow3").innerHTML = getWeekDay(new_date3) + ", " + new_date3.getDate() + " " + monthName3;
document.getElementById("tommorow4").innerHTML = getWeekDay(new_date4) + ", " + new_date4.getDate() + " " + monthName4;

// Функция для загрузки фильмов по дате
function renderFilmsByDate(dateStr) {
    fetch('films.json')
        .then(response => response.json())
        .then(films => {
            const container = document.getElementById('films_container');
            container.innerHTML = '';

            films.forEach(film => {
                if (film.показы && film.показы.includes(dateStr)) {
                    const card = document.createElement('div');
                    card.classList.add('film_promo_card');
                    card.innerHTML = `
                        <img src="${film.постер}" alt="${film.название}">
                        <h3>${film.название}</h3>
                        <p>${film.жанр}</p>
                        <p>${film.описание}</p>
                    `;
                    container.appendChild(card);
                }
            });
        });
}

// Привязка к кликам по дням
document.getElementById("tommorow").addEventListener("click", () => {
    renderFilmsByDate("2025-06-02");
});
document.getElementById("tommorow2").addEventListener("click", () => {
    renderFilmsByDate("2025-06-03");
});
document.getElementById("tommorow3").addEventListener("click", () => {
    renderFilmsByDate("2025-06-04");
});
document.getElementById("tommorow4").addEventListener("click", () => {
    renderFilmsByDate("2025-06-05");
});

// Старый фильтр по жанру — оставляем
items = document.querySelectorAll('.film_promo_card');
document.querySelector('.list').addEventListener('click', event => {
    if (event.target.tagName !== 'LI') return false;
    let filterClass = event.target.dataset['id'];

    items.forEach(elem => {
        elem.classList.remove('hidden');
        if (!elem.classList.contains(filterClass)) {
            elem.classList.add('hidden');
        }
    });
});
