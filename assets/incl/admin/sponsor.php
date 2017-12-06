<?php
require 'incl/adminHead.php';

if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}
?>


    <form method="post" action="addSponsor.php" class="col-md-3 mx-auto">

        <div class="form-group">
            <label>Firma Navn</label>
            <input required type="text" name="sponsorName" placeholder="Firma Name" class="form-control">
        </div>
        <div class="form-group">
            <label>Donation</label>
            <input required type="text" name="sponsorDonation" placeholder="Donation" class="form-control">
        </div>
        <div class="form-group">
            <label>Link til deres side</label>
            <input required type="text" name="sponsorLink" placeholder="URL" class="form-control">
        </div>

        <!-- INDSÆT UPLOAD AF LOGO HER -->
        <!-- <div class="form-group">
            <label>Billede</label>
            <input required type="file" name="sponsorImage" placeholder="Billede" class="form-control">
        </div> -->
        <button type="submit" class="btn btn-primary">Indsæt</button>
    </form>

<?php
require 'incl/adminFooter.php';
?>