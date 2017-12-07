$(document).ready(function updateCounter() {
    setInterval(function () {
        $("#counter").load("assets/incl/counter.php");
    }, 5000);
    setInterval(function () {
        $(".donateSlider").load("assets/incl/donateSlider.php");
    }, 40000);
});