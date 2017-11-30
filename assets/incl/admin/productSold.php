<?php
session_start();

<<<<<<< HEAD
require 'incl/adminHead.php';
=======
require'../head.php';
>>>>>>> 0ec7b6745aeefa6bf0137f03b814d9d58748586e


if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../../admin.php');
}
?>
<form method="post" action="addProduct.php" class="col-md-3 mx-auto">
    <div>
        <label>Varens Nummer</label>
        <input required type="number" name="id" placeholder="Varens Nummer" class="form-control">
    </div>
    <div>
        <label>Varens Salgs Pris</label>
        <input required type="number" name="price" placeholder="Pris" class="form-control">
    </div>
    <div>
        <label>Antal Der Er Solgt</label>
        <input required type="number" name="sold" placeholder="Antal Solgt" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Register Salg</button>
</form>
