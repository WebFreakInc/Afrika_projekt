<?php
require 'incl/adminHead.php';

if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}
?>


    <form method="post" action="addSponsor.php" enctype="multipart/form-data" class="col-md-3 mx-auto">

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
            <input required type="url" name="sponsorLink" placeholder="URL" class="form-control">
        </div>
        <div>
            <label>Vælg Sponsor Logo</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
        </div>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
        <button type="submit" class="btn btn-primary">Indsæt</button>

    </form>

<?php
require 'incl/adminFooter.php';
?>