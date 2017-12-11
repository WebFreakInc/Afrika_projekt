<?php
require 'incl/adminHead.php';
require '../dbInfo.php';
?>

<a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
<h3>Produkt Oversigt</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Varenummer</th>
        <th scope="col">Navn</th>
        <th scope="col">Pris</th>
        <th scope="col">Antal Tilbage</th>
        <th scope="col">Antal I Alt</th>
        <th scope="col">Solgt</th>
        <th scope="col">Tjent</th>
        <th scope="col">Kategori</th>
    </tr>
    </thead>
    <tbody>
    <?php while ($productsRow = $productsResult->fetch_assoc()) : ?>
    <tr>
        <td><?=$productsRow['product_id']?></td>
        <td><?=$productsRow['name']?></td>
        <td><?=$productsRow['price']?> kr</td>
        <?php $remaining = $productsRow['amount'] - $productsRow['sold']; ?>
        <td><?=$remaining?> stk</td>
        <td><?=$productsRow['amount']?> stk</td>
        <td><?=$productsRow['sold']?> stk</td>
        <td><?=$productsRow['earnings']?> kr</td>
        <td><?=$productsRow['category']?></td>
    </tr>
    <?php endwhile; ?>


    </tbody>

</table>
<a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>

<?php
require 'incl/adminFooter.php';
?>
