<?php
session_start();
require '../head.php';

if (!isset($loggedIn)) {
    header('location: ../../admin.php');
}
?>
<form>
    <input type="text" name="company" placeholder="Firma Navn">
    <input type="text" name="donation" placeholder="Donation (Gavekort, Fuglehus etc.)">
    <input type="text" name="comment" placeholder="Kommentar">
    <!-- INDSÆT UPLOAD AF LOGO HER -->
</form>
