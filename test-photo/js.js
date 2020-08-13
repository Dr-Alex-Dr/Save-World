/* Индекс слайда по умолчанию */

let all_aimages = ['img/slide1.jpg', 'img/slide2.jpg', "img/slide3.jpg"];

var dataPphp = document.querySelector('.data-php').getAttribute('data-attr');
alert(dataPhp);
var ImgNum = 0;
var ImgLength = all_aimages.length - 1;






/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    ImgNum++;
    if (ImgNum > ImgLength) { ImgNum = 0; }
    if (ImgNum < 0) { ImgNum = ImgLength; }
    document.slide_show.src = all_aimages[ImgNum];
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    ImgNum--;
    if (ImgNum > ImgLength) { ImgNum = 0; }
    if (ImgNum < 0) { ImgNum = ImgLength; }
    document.slide_show.src = all_aimages[ImgNum]; 
}

/* Устанавливает текущий слайд */


/* Основная функция слайдера */
