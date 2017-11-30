<?php
session_start();
require'../head.php';

if (!isset($loggedIn)) {
    header('location: ../../admin.php');
}
?>
<form method="post" action="addProduct.php">
    <div>
        <label>Varens Nummer</label>
        <input type="number" name="id" placeholder="Varens Nummer">
    </div>
    <div>
        <label>Varens Salgs Pris</label>
        <input type="number" name="price" placeholder="Pris">
    </div>
    <div>
        <label>Antal Der Er Solgt</label>
        <input type="number" name="sold" placeholder="Antal Solgt">
    </div>
    <!-- INDSÆT UPLOAD AF LOGO HER -->
</form>
