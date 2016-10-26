/**
 * Global
 * Created on : 20.08.2015, 16:22:18
 * Author     : Akado
 */

/* jshint esversion: 6 */
var pro69 = pro69 ? pro69 : {};

$('.slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
});

$('.slider_large').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

$(document).ready(function() {
    $('.flip-container').addClass('flippp');
});

$(function(){                // сработает, когда документ загрузится
    $('.logo').delay(1000) // пауза в 3 сек.
                .show(1000); // появление элемента в течении 1 сек.
});

$(document).ready(function() {
    $('.flip-container').addClass('flippp');
}); 


//require('f/src/global/gallery2.js');
//import ("gallery2.js");