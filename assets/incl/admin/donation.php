<?php
session_start();
require '../head.php';

/*if (!isset($loggedIn)) {
    header('location: ../../admin.php');
}*/
?>


<form method="post" action="addDonation.php">
    <div>
        <label>Navn</label>
        <input type="text" name="donationName" placeholder="Navn">
    </div>
    <div>
        <label>Doneret Beløb</label>
        <input type="number" name="donationAmount" placeholder="Beløb">
    </div>
    <div>
        <label>Kommentar</label>
        <input type="text" name="donationComment" placeholder="Kommentar">
    </div>
    <button type="submit">Indsæt</button>
</form>
