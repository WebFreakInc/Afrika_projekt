<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

//VARIABLES
//Product Variables
$name = $_POST['productName'];
$id = $_POST['productId'];
$price = $_POST['productPrice'];
$amount = $_POST['productAmount'];
$description = $_POST['productDescription'];
$category = $_POST['productCategory'];
//Upload Variables
$fileName = basename($_FILES["fileToUpload"]["name"]);
$target_dir = "../../img/products/";
$target_file = $target_dir . changeFileName($id, $fileName);
$error = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//CHECK IF LOGGED IN
if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../admin.php');
}

/* -- CHECK IF ALREADY CREATED -- */
$checkQuery = "SELECT * FROM products WHERE product_id = " . $id . "";
$checkResult = $dbConnect->query($checkQuery);
$checkRow = $checkResult->fetch_assoc();

// IF IT DOESN'T EXIST
if (!isset($checkRow)) {

    $createQuery = "INSERT INTO products (name, product_id, price, amount, description, category, img_path) VALUES ('" . $name . "', " . $id . ", " . $price . ", " . $amount . ", '" . $description . "', '" . $category . "', '".$fileName."')";
    $createResult = $dbConnect->query($createQuery);

//FEEDBACK
    echo "
     <div class='col-md-3 mx-auto'>
        <h3>Produkt Oprettet</h3>
        <p> Produkt: $name <br>
            Varenummer: $id<br>
            Pris: $price<br>
            Antal: $amount<br>
            Beskrivelse: $description<br>
            Kategori: $category<br>
            <img src='$target_file' style='width: 100%;'>
        </p>
        <a class='btn btn-secondary' href='product.php'>Indsæt Endnu Et Produkt</a>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";
}
//IF THE PRODUCT ALREADY EXISTS
else {
    $updateQuery = "UPDATE products SET name = '" . $name . "', product_id = " . $id . ", price = " . $price . ", amount = " . $amount . ", description = '" . $description . "', category = '" . $category . "', img_path = '".$fileName."' WHERE product_id = " . $id . "";
    $updateResult = $dbConnect->query($updateQuery);

//FEEDBACK
    echo "
     <div class='col-md-3 mx-auto'>
        <h3>Produkt Opdateret</h3>
        <p> Produkt: $name <br>
            Varenummer: $id<br>
            Pris: $price<br>
            Antal: $amount<br>
            Beskrivelse: $description<br>
            Kategori: $category<br>
            <img src='$target_file' style='width: 100%;'>
        </p>
        <a class='btn btn-secondary' href='product.php'>Indsæt Endnu Et Produkt</a>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";
}

require 'incl/adminFooter.php';


/* -----------------------------------------------------------------------------
----------------------------------IMAGE UPLOADER--------------------------------
----------------------------------------------------------------------------- */


// CHECK IF IT'S AN ACTUAL IMAGE
if (!empty($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
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
} // UPLOADING THE FILE TO THE SERVER
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    } else {
        echo "Der var en fejl ved upload af billedet.";
    }
}

// --------  CHANGE FILENAME FUNCTION  --------
function changeFileName($change, $string)
{
    return $change . "." . pathinfo($string, PATHINFO_EXTENSION);
}

?>
