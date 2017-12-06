<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

$name = $_POST['donationName'];
$donation = $_POST['donationAmount'];
$comment = $_POST['donationComment'];


if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}

$donationQuery = "INSERT INTO donations (name, donation, comment) VALUES ('".$name."', ".$donation.", '".$comment."')";
$donationResult = $dbConnect->query($donationQuery);

echo "
     <div class='col-md-3 mx-auto'>
        <h3>Donation indsat</h3>
        <p> Navn: $name <br>
            Donering: $donation <br>
            Kommentar: $comment
        </p>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";

require 'incl/adminFooter.php';

