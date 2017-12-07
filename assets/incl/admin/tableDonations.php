<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

$tableQuery = "SELECT * FROM donations";
$tableResult = $dbConnect->query($tableQuery);
?>

<a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
<h3>Donations Oversigt</h3>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Navn</th>
        <th scope="col">Donation</th>
        <th scope="col">Kommentar</th>

    </tr>
    </thead>
    <tbody>
    <?php while ($tableRow = $tableResult->fetch_assoc()) : ?>
        <tr>
            <td><?=$tableRow['name']?></td>
            <td><?=$tableRow['donation']?></td>
            <td><?=$tableRow['comment']?></td>

        </tr>
    <?php endwhile; ?>


    </tbody>

</table>
<a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>

<?php
require 'incl/adminFooter.php';
?>
