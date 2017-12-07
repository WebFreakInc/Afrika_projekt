<?php

require ("dbInfo.php");


$getSponsorQuery = "SELECT * FROM `Sponsors`"; // SQL statement for Sponsor
$sponsor = mysqli_query($dbConnect, $getSponsorQuery) or die(mysqli_error($dbConnect)); // Connect or die if error
$sponsorCheck = mysqli_num_rows($sponsor); //Save how many rows detected


if($sponsorCheck < 1){ // If rows less than 1, output error
  echo ('Something went wrong :[');
} else {
  echo ('<div class="sponsorSlider fixed-bottom container-fluid">');
  echo ('<ul class="sponsorInfo">');
  while($row = mysqli_fetch_assoc($sponsor)){ // While a row is a assoc array, take the "donation" and add it to total amount
      echo ('<li>');
      echo ('
        <picture>
        <source srcset="'. $row["logo"] . '.jpg">
        <source srcset="'. $row["logo"] . '.jpeg">
        <source srcset="'. $row["logo"] . '.png">
        <source srcset="'. $row["logo"] . '.gif">
        <source srcset="'. $row["logo"] . '.webp">
        <img src="' . $row["logo"] . '.jpg" alt="Flowers" style="width:auto;">
      </picture>
      ');
      echo ('</li> ');
  }
  echo ('</ul>');
  echo ('</div>');
}
?>