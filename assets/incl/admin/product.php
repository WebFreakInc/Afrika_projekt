<?php
session_start();
require '../head.php';

if (!isset($loggedIn)) {
    header('location: ../../admin.php');
}
?>
<form method="post" action="addProduct.php">
    <div>
        <label>Varens Navn</label>
        <input type="text" name="name" placeholder="Varens Navn">
    </div>
    <div>
        <label>Varens Nummer</label>
        <input type="number" name="id" placeholder="Varens Nummer">
    </div>
    <div>
        <label>Varens Pris</label>
        <input type="number" name="price" placeholder="Pris">
    </div>
    <div>
        <label>Antal Der Er</label>
        <input type="number" name="amount" placeholder="Antal">
    </div>
    <div>
        <label>Varens Beskrivelse</label>
        <input type="text" name="description" placeholder="Varens Beskrivelse">
    </div>
    <div>
        <label>Varens Kategori</label>
        <input type="checkbox" name="category">
    </div>
            <!-- INDSÆT UPLOAD AF LOGO HER -->
</form>
