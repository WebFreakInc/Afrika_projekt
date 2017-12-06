$(document).ready(function updateCounter() {
    setInterval(function () {
        $("#counter").load("assets/incl/counter.php");
    }, 5000);
});