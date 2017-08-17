$(document).ready(function () {
    var swiper = new Swiper('.swiper-container-two', {
        nextButton: '.swiper-button-next-two',
        prevButton: '.swiper-button-prev-two',
        pagination: '.swiper-pagination-two',
        effect: 'fade',
        loop: true,
        autoplay: 3000,
        speed: 600,
        paginationType: 'fraction',
        autoplayDisableOnInteraction: true

    });

});

var swiper = new Swiper('.swiper-container-three', {
        pagination: '.swiper-pagination-three',
        effect: 'fade',
        loop: true,
        autoplay: 3000,
        speed: 600,
        paginationType: 'fraction'
});

$(document).ready(function(){
   $('.your-class').slick({
    slidesToShow: 1,
  	slidesToScroll: 1,
  	autoplay: true,
  	autoplaySpeed: 3000,
    speed: 500,
  	fade: true,
  	cssEase: 'linear'
   });
});
