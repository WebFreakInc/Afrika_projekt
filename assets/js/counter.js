$(document).ready(function updateCounter() {
    setInterval(function () {
        $("#counter").load("assets/incl/counter.php");
    }, 5000);
    setInterval(function () {
        $(".donateSlider").load("assets/incl/donateSlide.php");
    }, 40000);
});