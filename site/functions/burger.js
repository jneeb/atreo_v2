$(document).ready(function () {
    $("#mobileBurger").click(function () {
        if($("#mobileBurger").hasClass("isOpen")) {
            $(this).removeClass("isOpen");
            $("#mobileSlider").removeClass("isOpen");
        } else {
            $(this).addClass("isOpen");
            $("#mobileSlider").addClass("isOpen");
        }
    });
});
