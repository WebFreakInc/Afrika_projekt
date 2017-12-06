<?php
// For hver row i table donations, NAVN,BELØB,KOMMENTAR
// Output i li
require ("dbInfo.php");


$getDonationsQuery = "SELECT * FROM `donations`"; // SQL statement for donations
$donations = mysqli_query($dbConnect, $getDonationsQuery) or die(mysqli_error($dbConnect)); // Connect or die if error
$donationsCheck = mysqli_num_rows($donations); //Save how many rows detected


if($donationsCheck < 1){ // If rows less than 1, output error
  echo ('Something went wrong :[');
} else {
  echo ('<div class="donateSlider fixed-bottom container-fluid">');
  echo ('<ul class="donateInfo">');
  while($row = mysqli_fetch_assoc($donations)){ // While a row is a assoc array, take the "donation" and add it to total amount
      echo ('<li>');
      echo ($row["name"] . ': '. $row["donation"] . ' Kr. -');
      echo ('</li> ');
  }
  echo ('</ul>');
  echo ('</div>');
}
?>