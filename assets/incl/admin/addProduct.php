<?php
session_start();
require 'incl/adminHead.php';
require '../dbInfo.php';

$name = $_POST['productName'];
$id = $_POST['productId'];
$price = $_POST['productPrice'];
$amount = $_POST['productAmount'];
$description = $_POST['productDescription'];
$category = $_POST['productCategory'];


if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}

$donationQuery = "INSERT INTO sponsors (company, donation, link) VALUES ('".$name."', '".$donation."', '".$link."')";
$donationResult = $dbConnect->query($donationQuery);

echo "
     <div class='col-md-3 mx-auto'>
        <h3>Donation indsat</h3>
        <p> Firma: $name <br>
            Donering: $donation <br>
            Link (URL): $link
            Logo: Indsæt billede tag her
        </p>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";

require 'incl/adminFooter.php';
?>
