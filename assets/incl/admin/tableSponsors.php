<?php
require 'incl/adminHead.php';
require '../dbInfo.php';

$tableQuery = "SELECT * FROM sponsors";
$tableResult = $dbConnect->query($tableQuery);
?>

    <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>
    <h3>Donations Oversigt</h3>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Firma</th>
            <th scope="col">Donation</th>
            <th scope="col">Link</th>

        </tr>
        </thead>
        <tbody>
        <?php while ($tableRow = $tableResult->fetch_assoc()) : ?>
            <tr>
                <td><?=$tableRow['company']?></td>
                <td><?=$tableRow['donation']?></td>
                <td><?=$tableRow['link']?></td>

            </tr>
        <?php endwhile; ?>


        </tbody>

    </table>
    <a class='btn btn-secondary' href='../../../admin.php'>Tilbage til Admin Panelet</a>

<?php
require 'incl/adminFooter.php';
?>