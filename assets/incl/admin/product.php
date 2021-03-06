<?php
require 'incl/adminHead.php';
require '../dbInfo.php';
//phpinfo();

if (!isset($_SESSION['loggedIn'])) {
    header('location: ../../../admin.php');
}
?>

<h3 class="text-center">Hvis <b>varenummeret</b> allerede findes, bliver det automatisk opdateret istedet for oprettet</h3>
<form method="post" action="addProduct.php" enctype="multipart/form-data" class="col-md-3 mx-auto">
    <div>
        <label>Varens Navn</label>
        <input required type="text" name="productName" placeholder="Varens Navn" class="form-control">
    </div>
    <div>
        <label>Varens Nummer</label>
        <input required type="number" name="productId" placeholder="Varens Nummer" class="form-control">
    </div>
    <div>
        <label>Pris pr. Styk</label>
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
    <div>
        <label>Vælg Produkt Billede</label>
        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
    </div>
    <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
    <button type="submit" class="btn btn-primary">Indsæt</button>
</form>

<?php
require 'incl/adminFooter.php';
?>
