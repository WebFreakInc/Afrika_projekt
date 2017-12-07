<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

//VARIABLES
//Sponsor Variables
$name = $_POST['sponsorName'];
$donation = $_POST['sponsorDonation'];
$link = $_POST['sponsorLink'];
//Upload Variables
$fileName = basename($_FILES["fileToUpload"]["name"]);
$target_dir = "../../img/sponsors/";
$target_file = $target_dir . changeFileName($name,$fileName);
$error = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}

/* -- CHECK IF ALREADY CREATED -- */
$checkQuery = "SELECT * FROM sponsors WHERE company = '" . $name . "'";
$checkResult = $dbConnect->query($checkQuery);
$checkRow = $checkResult->fetch_assoc();

// IF IT DOESN'T EXIST
if (!isset($checkRow)) {
    $donationQuery = "INSERT INTO sponsors (company, donation, link, img_path) VALUES ('" . $name . "', '" . $donation . "', '" . $link . "', '".$fileName."')";
    $donationResult = $dbConnect->query($donationQuery);

    echo "
     <div class='col-md-3 mx-auto'>
        <h3>Sponsor Oprettet</h3>
        <p> Firma: $name <br>
            Donering: $donation <br>
            Link (URL): $link<br>
            Logo: <br>
            <img src='$target_file' style='width: 100%;'>
        </p>
        <a class='btn btn-secondary' href='sponsor.php'>Indsæt Endnu En Sponsor</a>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";
}

//IF THE PRODUCT ALREADY EXISTS
else {
    $updateQuery = "UPDATE sponsors SET company = '" . $name . "', donation = '" . $donation . "', link = '" . $link . "', img_path = '".$fileName."' WHERE company = '" . $name . "'";
    $updateResult = $dbConnect->query($updateQuery);

    echo "
     <div class='col-md-3 mx-auto'>
        <h3>Sponsor Opdateret</h3>
        <p> Firma: $name <br>
            Donering: $donation <br>
            Link (URL): $link<br>
            Logo: <br>
            <img src='$target_file' style='width: 100%;'>
        </p>
        <a class='btn btn-secondary' href='sponsor.php'>Indsæt Endnu En Sponsor</a>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";
}

require 'incl/adminFooter.php';

/* -----------------------------------------------------------------------------
----------------------------------IMAGE UPLOADER--------------------------------
----------------------------------------------------------------------------- */


// CHECK IF IT'S AN ACTUAL IMAGE
if(!empty($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Filen er et billede - " . $check["mime"] . ". ";
        $error = 1;
    } else {
        echo "Filen er ikke et billede!";
        $error = 0;
    }
}

// CHECK IF THERES AN ERROR (from file checker)
if ($error == 0) {
    echo " Filen blev ikke uploaded.";
}

// UPLOADING THE FILE TO THE SERVER
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    }

    else {
        echo "Der var en fejl ved upload af billedet.";
    }
}

// --------  CHANGE FILENAME FUNCTION  --------
function changeFileName($change,$string) {
    return $change.".".pathinfo($string,PATHINFO_EXTENSION);
}
?>
