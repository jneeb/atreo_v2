$(document).ready(function(){
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true,
        fade: true,
        asNavFor: '.slider-nav',
        focusOnSelect: true
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        centerMode: true,
        focusOnSelect: true,
        arrows: false
    });
});

$(document).ready(function(){
    $('.sponsorWrap').slick({
        speed: 4000,
        autoplay: true,
        autoplaySpeed: 0,
        cssEase: 'linear',
        slidesToShow: 4,
        slidesToScroll: 1,
        variableWidth: true,
        arrows: false,
        dots: false
  });
});
