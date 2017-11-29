<?php

require '../dbInfo.php';

$name = $_POST['donationName'];
$donation = $_POST['donationAmount'];
$comment = $_POST['donationComment'];


/*if (!isset($loggedIn)) {
    header('location: ../../admin.php');
}*/

$donationQuery = "INSERT INTO donations (name, donation, comment) VALUES (".$name.", ".$donation.", ".$comment.")";
$donationResult = $dbConnect->query($donationQuery);

print_r($donationQuery);

?>

