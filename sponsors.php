<?php
require('assets/incl/head.php');
require ('assets/incl/dbInfo.php');
?>

<section class="container products__main">
    <h3>Vores Sponsore</h3>
    <div class="products__container">

<?php
$cardQuery = "SELECT * FROM sponsors";
$cardResult = $dbConnect->query($cardQuery);
while ($cardRow = $cardResult->fetch_array()) : ?>
    <a  href="<?=$cardRow['link']?>" class="card products">
        <img class="card-img-top sponsor__img" src="assets/img/sponsors/<?=$cardRow['company']?>.<?=$cardRow['img_path']?>" alt="sponsor-logo">
        <div class="card-block">
            <h4 class="products__name"><?=$cardRow['company']?></h4>
            <h6 class="products__description">Har doneret</h6>
            <p class="products__description"><?=$cardRow['donation']?></p>
        </div>
    </a>
<?php endwhile; ?>
    </div>
</section>



    <!--DONATIONS-->
<?php include('assets/incl/donateSlider.php');?>


    <!--FOOTER CONTACT-->

<?php include('assets/incl/footer.php'); ?>

