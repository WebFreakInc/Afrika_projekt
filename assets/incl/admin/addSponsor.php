<?php
session_start();
require '../dbInfo.php';

$name = $_POST['donationName'];
$donation = $_POST['donationAmount'];
$comment = $_POST['donationComment'];


/*if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}*/

$donationQuery = "INSERT INTO donations (name = '".$name."', donation = ".$donation.", comment = '".$comment."')";
$donationResult = $dbConnect->query($donationQuery);

/*$donationQuery = "INSERT INTO donations (name, donation, comment) VALUES ('".$name."', ".$donation.", '".$comment."')";
$donationResult = $dbConnect->query($donationQuery);*/

/*$donationQuery = "SELECT * FROM donations";
$donationResult = $dbConnect->query($donationQuery);
$donationRow = $donationResult->fetch_assoc();*/

print_r($donationQuery);

?>
