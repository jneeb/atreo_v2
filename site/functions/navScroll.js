$(document).ready(function () {
    window.onscroll = function () {
        if (window.pageYOffset >= 100) {
            $(".desktopScrollNav").addClass("onScroll");
        } else {
            $(".desktopScrollNav").removeClass("onScroll");
        }
    }
});
