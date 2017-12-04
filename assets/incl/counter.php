<?php
require("assets/incl/dbInfo.php");
// require("assets/incl/footer.php");
// Get every amount from db
// Add it in single value and output to counter


// Update variable
// Output with new variable

$totalAmount = 0;

$getDonationsQuery = "SELECT `donation` FROM `donations`"; // SQL statement for donations
$donations = mysqli_query($dbConnect, $getDonationsQuery) or die(mysqli_error($dbConnect)); // Connect or die if error
$donationsCheck = mysqli_num_rows($donations); //Save how many rows detected

if($donationsCheck < 1){ // If rows less than 1, output error
    echo ('Something went wrong :[');
} else {
    while($row = mysqli_fetch_assoc($donations)){ // While a row is a assoc array, take the "donation" and add it to total amount
        foreach ($row as $donation) {
            $totalAmount += $donation;
        }
    }
    echo '<div id="counter"><h2>'.$totalAmount.' Kroner</h2></div>';
}
?>