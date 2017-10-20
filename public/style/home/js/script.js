$(document).ready(function(){
    // 大图滚动
    var bigPic = $('.index-bigpic').swiper({
        direction: 'horizontal',
        loop: true,
        autoplay: 3000,
        autoplayDisableOnInteraction : false,
        paginationClickable: '.swiper-pagination',
        spaceBetween: 30,
        effect: 'fade'
    });
});