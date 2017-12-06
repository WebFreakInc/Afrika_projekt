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

$productQuery = "INSERT INTO products (name, product_id, price, amount, description, category) VALUES ('".$name."', ".$id.", ".$price.", ".$amount.", '".$description."', '".$category."')";
$productResult = $dbConnect->query($productQuery);

echo "
     <div class='col-md-3 mx-auto'>
        <h3>Produkt indsat</h3>
        <p> Produkt: $name <br>
            Varenummer: $id<br>
            Pris: $price<br>
            Antal: $amount<br>
            Beskrivelse: $description<br>
            Kategori: $category<br>
        </p>
        <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
     </div>";

require 'incl/adminFooter.php';
?>
