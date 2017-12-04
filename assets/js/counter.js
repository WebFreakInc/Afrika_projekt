$(document).ready(function updateCounter() {
    setInterval(function () {
        $("#counter").load("test.php");
        console.log("hej");
    }, 1000);
});