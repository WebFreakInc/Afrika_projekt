<!-- Vi skal have en user table, info omkring password bliver lagt i projektinformation -->
<?php
require("assets/incl/dbinfo.php");

session_start(); // Start session

if(isset($_POST["submit"])){ // Check if username and password is set
  $username = validateData($_POST["username"]); // Validate input
  $password = validateData($_POST["password"]); // Validate input
  $query = "SELECT * from users WHERE username = '$username'";
  // $result = $dbConn -> query($query);
  $result = mysqli_query($dbConn, $query);
  $resultCheck = mysqli_num_rows($result); // Return number of rows in our result
  if ($resultCheck < 1) { // We check for errors
    echo('Fejl'); // Output error without telling to much
    } else {
      if ($row = mysqli_fetch_assoc($result)) { // We are fetching a assoc array from our result
        //Dehashing password
        $hashedPwdCheck = password_verify($password, $row['password']); // We verify the hash
        if ($hashedPwdCheck == false) {
          echo("Wrong username/password"); // Give error if not matched
        } elseif($hashedPwdCheck == true) {
          // Here we redirect to a admin panel site because password hash matches with input
                
        }
      }
    }
  }



function validateData($data){ // Maybe ctype also? We sanitize our data to prevent attacks for now
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>

  <!doctype html>
  <html lang="en">

  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous">
  </head>

  <body>
    <section class="container">
      <form class="col-lg-5 mx-auto" method="POST" action="">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-right">Login</button>
      </form>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"></script>
  </body>

  </html>