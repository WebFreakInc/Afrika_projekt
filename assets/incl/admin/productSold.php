<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../../admin.php');
}
?>

<form method="post" action="updateSoldProduct.php" class="col-md-3 mx-auto">
    <div>
        <label>Produkt ID</label>
        <select required name="id" class="form-control">
            <?php while ($productsRow = $productsResult->fetch_assoc()) : ?>
                <option><?=$productsRow['product_id']?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div>
        <label>Varenes <b>Samlet</b> Salgs Pris</label>
        <input required type="number" name="price" placeholder="Pris" class="form-control">
    </div>
    <div>
        <label>Antal Der Er Solgt</label>
        <input required type="number" name="sold" placeholder="Antal Solgt" class="form-control">
    </div>
    <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
    <button type="submit" class="btn btn-primary">Register Salg</button>
</form>

<?php
require 'incl/adminFooter.php';
?>