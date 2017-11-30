<?php
session_start();
require 'incl/adminHead.php';
require '../dbInfo.php';

if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../../admin.php');
}
?>
<form method="post" action="addProduct.php" class="col-md-3 mx-auto">
    <div>
        <label>Varens Navn</label>
        <input required type="text" name="productName" placeholder="Varens Navn" class="form-control">
    </div>
    <div>
        <label>Varens Nummer</label>
        <input required type="number" name="productId" placeholder="Varens Nummer" class="form-control">
    </div>
    <div>
        <label>Varens Pris</label>
        <input required type="number" name="productPrice" placeholder="Pris" class="form-control">
    </div>
    <div>
        <label>Antal Der Er</label>
        <input required type="number" name="productAmount" placeholder="Antal" class="form-control">
    </div>
    <div>
        <label>Varens Beskrivelse</label>
        <input required type="text" name="productDescription" placeholder="Varens Beskrivelse" class="form-control">
    </div>
    <div>
        <label>Varens Kategori</label>
        <select required name="productCategory" class="form-control">
            <?php while ($categoryRow = $categoryResult->fetch_assoc()) : ?>
                <option><?=$categoryRow['category']?></option>
            <?php endwhile; ?>
        </select>
    </div>
            <!-- INDSÆT UPLOAD AF BILLEDE HER -->


    <button type="submit" class="btn btn-primary">Indsæt</button>
</form>

<?php
require 'incl/adminFooter.php';
?>
