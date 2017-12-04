<!-- Header  -->
<?php require ("assets/incl/head.php") ?>

<!-- Billeder med class fx tømrer, sorter efter class,  -->

<section class="container">
    <a name="Tomrer" id="" class="btn btn-primary" href="#" onclick="gallerySwitch(this.name)" role="button">Tømrer</a>
    <a name="Murer" id="" class="btn btn-primary" href="#" onclick="gallerySwitch(this.name)" role="button">Murer</a>
    <div class="row gallery">
        <picture class="col-lg-3 Murer" style="">
            <img class="img-fluid" width="" src="assets/img/productImages/1.jpg" alt="" srcset="">
            <h4>Brød</h4>
        </picture>
        <picture class="col-lg-3 Tomrer" style="">
            <img class="img-fluid" width="" src="assets/img/productImages/2.jpg" alt="" srcset="">
            <h4>Brød</h4>
        </picture>
        <picture class="col-lg-3 Tomrer" style="">
            <img class="img-fluid" width="" src="assets/img/productImages/3.jpg" alt="" srcset="">
            <h4>Brød</h4>
        </picture>
        <picture class="col-lg-3 Murer" style="">
            <img class="img-fluid" width="" src="assets/img/productImages/4.jpeg" alt="" srcset="">
            <h4>Brød</h4>
        </picture>
    </div>
</section>


<?php require("assets/incl/footer.php");?>
<script src="assets/js/gallery.js"></script>