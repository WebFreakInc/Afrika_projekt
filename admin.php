<?php
session_start();
require 'assets/incl/admin/incl/adminHead.php';
require 'assets/incl/dbInfo.php';

function validateData($data){ // Maybe ctype also? We sanitize our data to prevent attacks for now
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
}

if(isset($_POST["submit"])){ // Check if username and password is set
    $username = validateData($_POST["username"]); // Validate input
    $password = validateData($_POST["password"]); // Validate input
    $query = "SELECT * from users WHERE username = '$username'";
    // $result = $dbConn -> query($query);
    $result = mysqli_query($dbConnect, $query);
    $resultCheck = mysqli_num_rows($result); // Return number of rows in our result
    if ($resultCheck < 1) { // We check for errors
        echo('Fejl'); // Output error without telling to much
    }

    else {
        if ($row = mysqli_fetch_assoc($result)) { // We are fetching a assoc array from our result
            //Dehashing password
            $hashedPwdCheck = password_verify($password, $row['password']); // We verify the hash
            if ($hashedPwdCheck == false) {
                echo("Wrong username/password"); // Give error if not matched
            }
            elseif($hashedPwdCheck == true) {
                $_SESSION['loggedIn'] = true;
            }
        }
    }
}

if (isset($_SESSION['loggedIn'])) {

    echo '
<div class="row">
  <div class="col-md-3 mx-auto">
  <h2>Indsæt Donation</h2>
    <form method="post" action="assets/incl/admin/addDonation.php">
        <div class="form-group">
            <label>Navn</label>
            <input required required type="text" name="donationName" placeholder="Navn" class="form-control">
        </div>
        <div class="form-group">
            <label>Doneret Beløb</label>
            <input required required type="number" name="donationAmount" placeholder="Beløb" class="form-control">
        </div>
        <div class="form-group">
            <label>Kommentar</label>
            <input required required type="text" name="donationComment" placeholder="Kommentar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Indsæt</button>
    </form>
    </div>


    <section class="col-md-4 mx-auto">
        <h4>Sponsore</h4>
        <a href="assets/incl/admin/sponsor.php" class="btn btn-secondary">Indsæt Sponsor</a>
        <h4>Produkter</h4>
        <a href="assets/incl/admin/product.php" class="btn btn-secondary">Indsæt Produkt</a>
        </br>
        <a href="assets/incl/admin/productSold.php" class="btn btn-secondary">Produkt Solgt</a>
        </br>
        <h4>Logout</h4>
        <form method="post">
            <button type="submit" class="btn btn-secondary" name="logout">Log Ud</button>
        </form>
    </section>
    </div>
';
}


else {

    echo '
    <section class="container">
      <form class="col-lg-5 mx-auto" method="POST" action="admin.php">
        <div class="form-group">
          <label for="username">Username</label>
          <input required type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input required type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-right">Login</button>
      </form>
    </section>
    ';

}

require 'assets/incl/admin/incl/adminFooter.php';
?>
