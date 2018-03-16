$(document).ready(function () {
    $(".bottleServiceDesktop").click(function () {
        if($(".guestListDesktop").hasClass("active")) {
            $(".guestListDesktop, .guestListForm").removeClass("active");
            $(".bottleServiceDesktop, .bottleServiceForm").addClass("active");
        } else {

        }
    });
    $(".guestListDesktop").click(function () {
        if($(".bottleServiceDesktop").hasClass("active")) {
            $(".bottleServiceDesktop, .bottleServiceForm").removeClass("active");
            $(".guestListDesktop, .guestListForm").addClass("active");
        } else {

        }
    });
});
