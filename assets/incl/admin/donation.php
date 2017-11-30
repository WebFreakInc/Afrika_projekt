<?php
session_start();
require 'incl/adminHead.php';

if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../../admin.php');
}
?>


<form method="post" action="addDonation.php" class="col-md-3 mx-auto">
    <div class="form-group">
        <label>Navn</label>
        <input required type="text" name="donationName" placeholder="Navn" class="form-control">
    </div>
    <div class="form-group">
        <label>Doneret Beløb</label>
        <input required type="number" name="donationAmount" placeholder="Beløb" class="form-control">
    </div>
    <div class="form-group">
        <label>Kommentar</label>
        <input required type="text" name="donationComment" placeholder="Kommentar" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Indsæt</button>
</form>

<?php
    require 'incl/adminFooter.php';
?>
