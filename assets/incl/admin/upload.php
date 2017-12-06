<?php
require '../dbInfo.php';

//VARIABLES
$fileName = basename($_FILES["fileToUpload"]["name"]);
$target_dir = "../../img/products/";
//Ændre "hej" til post navn fra sponsor og produkt
$target_file = $target_dir . changeFileName("hej",$fileName);
$error = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


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
        echo "Filen ". basename( $_FILES["fileToUpload"]["name"]). " er blevet uploaded.";
    } else {
        echo "Der var en fejl ved upload af billedet.";
    }
}

// --------  CHANGE FILENAME FUNCTION  --------
function changeFileName($change,$string) {
    return $change.".".pathinfo($string,PATHINFO_EXTENSION);
}
?>
