<?php
// For hver row i table donations, NAVN,BELØB,KOMMENTAR
// Output i li
require ("dbInfo.php");


$getDonationsQuery = "SELECT * FROM `donations` ORDER BY `id` DESC LIMIT 10"; // SQL statement for donations
$donations = mysqli_query($dbConnect, $getDonationsQuery) or die(mysqli_error($dbConnect)); // Connect or die if error
$donationsCheck = mysqli_num_rows($donations); //Save how many rows detected

// Sponsor

$getSponsorQuery = "SELECT * FROM `Sponsors`"; // SQL statement for Sponsor
$sponsor = mysqli_query($dbConnect, $getSponsorQuery) or die(mysqli_error($dbConnect)); // Connect or die if error
$sponsorCheck = mysqli_num_rows($sponsor); //Save how many rows detected


if($donationsCheck < 1 && $sponsorCheck < 1){ // If rows less than 1, output error
  echo ('Something went wrong :[ No donations or sponsor found');
} else {
  echo ('<div class="bottomSlider fixed-bottom container-fluid">');
  echo ('<div class="donateSlide">');
  echo ('<ul class="donateInfo">');
  while($row = mysqli_fetch_assoc($donations)){ // While a row is a assoc array, take the "donation" and add it to total amount
      echo ('<li>');
      echo ($row["name"] . ': '. $row["donation"] . ' Kr. -');
      echo ('</li> ');
  }
  echo ('</ul>');
  echo ('</div>');
  // Sponsor
  echo('<div class="sponsorSlide">');
  echo ('<ul class="sponsorInfo">');
  while($row = mysqli_fetch_assoc($sponsor)){ // While a row is a assoc array, take the "donation" and add it to total amount
      echo ('<li>');
      echo ('
      <picture>
        <source srcset="assets/img/sponsors/'. $row["company"] . '.jpg">
        <source srcset="assets/img/sponsors/'. $row["company"] . '.jpeg">
        <source srcset="assets/img/sponsors/'. $row["company"] . '.png">
        <source srcset="assets/img/sponsors/'. $row["company"] . '.gif">
        <source srcset="assets/img/sponsors/'. $row["company"] . '.webp">
        <img src="assets/img/sponsors/' . $row["company"] . '.jpg" alt="Flowers" style="">
      </picture>
      ');
      echo(' ' . $row["company"] . ' - ' . $row["donation"]);
      echo ('</li> ');
  }
  echo ('</ul>');
  echo('</div>');
  echo ('</div>');
}
?>