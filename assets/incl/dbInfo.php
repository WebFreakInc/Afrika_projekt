<?php
//session_start();
/*if (!isset($movieSelect)) {
    $movieSelect = 1;
}*/

/* -- DATABASE CONNECTION -- */
$dbServerName = "localhost";
$dbUserName = "admin";
$dbPassword = "admin";
$dbName = "afrika";


$dbConnect = new mysqli ($dbServerName, $dbUserName,$dbPassword, $dbName);
$dbConnect ->set_charset('UTF8');



if ($dbConnect -> connect_errno) {
    echo "Database Error - " .$dbConnect -> connect_errno;
}

/* -- DATABASE SELECTION VARIABLES -- */

//LIST SELECTION
$productsQuery = "SELECT * FROM products";
$productsResult = $dbConnect ->query($productsQuery);
$productsRow = $productsResult->fetch_assoc();

//CATEGORY SELECTION
$categoryQuery = "SELECT * FROM categories";
$categoryResult = $dbConnect ->query($categoryQuery);

