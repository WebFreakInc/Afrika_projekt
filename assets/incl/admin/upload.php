<?php
require 'dbInfo.php';

$fileName = basename($_FILES["fileToUpload"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . changeFileName("hej",$fileName); //Ændre "hej" til post navn fra sponsor og produkt
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(!empty($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Filen er et billede - " . $check["mime"] . ". ";
        $uploadOk = 1;
    } else {
        echo "Filen er ikke et billede!";
        $uploadOk = 0;
    }
}

function changeFileName($change,$string) {
  return $change.".".pathinfo($string,PATHINFO_EXTENSION);
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo " Filen blev ikke uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $imgQuery = "INSERT INTO `products` (`id`, `product_id`, `name`, `price`, `sold`, `amount`, `description`, `img_path`, `category`) VALUES (NULL, '1', 'test', '420', '2', '4', 'Test', '$target_file', 'test')";
      $imgResult = mysqli_query($dbConnect, $imgQuery);
        echo "Filen ". basename( $_FILES["fileToUpload"]["name"]). " er blevet uploaded.";
    } else {
        echo "Der var en fejl med at uploade billedet.";
    }
}
?>
