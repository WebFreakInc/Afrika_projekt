<?php
session_start();
require '../head.php';

if (isset($loggedIn)) {
    echo '
    <form method="post" action="#">
        <div>
            <label>Login</label>
            <input type="text" name="name" placeholder="Login">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
        </div>
    </form>
    ';
}


else {
    echo '
    <form method="post" action="assets/incl/admin/donation.php">
        <button type="submit">Indsæt Donation</button>
    </form>

    <form method="post" action="assets/incl/admin/sponsor.php">
        <button type="submit">Indsæt Sponsor</button>
    </form>

    <form method="post" action="assets/incl/admin/productSold.php">
        <button type="submit">Produkt Solgt</button>
    </form>

    <form method="post" action="assets/incl/admin/products.php">
        <button type="submit">Indsæt Produkter</button>
    </form>
';
}
?>


