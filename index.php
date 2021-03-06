<!-- HEAD, HEADER & BODY (start) -->
<?php include('assets/incl/head.php'); ?>


<!--HERO IMAGE MED LOGO-->
<section class="container">
    <picture>
        <source srcset="assets/img/hero.jpg">
        <img class="img-fluid hero_image" src="assets/img/hero.jpg" alt="Anja-Lovén-med-heksebørn">
    </picture>
</section>

<br>
<br>
<br>

<!--TOTAL ACCUMULATED-->
<section class="container">
    <?php include('assets/incl/counter.php'); ?>
    <h2 class="text-center indsamlet-h2">Indsamlet til DINNødhjælp</h2>
</section>

<br>
<br>

<!-- DATO + MINDRE INFO TEXT-->
<section class="container">
    <article class="text-center bold-text">
        <p>Tirsdag den 19. december kl. 9-12 byder TECHCOLLEGE alle interesserede indenfor til støtte for Anja Lovén og
            hendes organisation DINNødhjælp.</p>
    </article>
</section>

<br>

<!--INFO TEXT-->
<section id="infotext" class="container">
    <div class="row">
        <article class="col-md-6">
            <h2>Produkterne</h2>
            <p>Elever på grundforløb 1 på flere forskellige uddannelser, har i et par måneder arbejdet med at udvikle og
                konstruere
                en lang række produkter, som sælges til fordel for DINNødhjælp. Der er fuglehuse, kaninbure, bænke,
                skamler og champagnekølere.
                Der er krukker, lysestager, hylder og mange andre forskellige produkter. Alle tingene bliver sat til
                salg på facebookgruppen
                "Hjælp Afrika (TECHCOLLEGE)".</p>
        </article>

        <article class='col-md-6'>
            <h2>Donationer</h2>
            <p>Man kan betale kontant eller via MobilPay tlf.: 2526 6638 (modtager "Elevforum, Media og Projekt
                Afrika").</p>

            <h2>Fundraising</h2>
            <p>Produkterne sælges også på en fysisk auktion på: TECHCOLLEGE i: Konference N207 på TECHCOLLEGE, Øster
                Uttrup Vej 1
                i Aalborg. Man er velkommen til at møde op på dagen.</p>
        </article>
    </div>
</section>


<!--PRODUCTS-->
<section class="container products__main">
    <h3>Nogle Af Vores Produkter</h3>
    <div class="products__container">

    <?php
    $cardQuery = "SELECT * FROM products ORDER BY RAND() LIMIT 10";
    $cardResult = $dbConnect->query($cardQuery);
    while ($cardRow = $cardResult->fetch_array()) : ?>
        <div class="card products">
                <img class="card-img-top" src="assets/img/products/<?=$cardRow['product_id']?>.<?=$cardRow['img_path']?>" alt="produkt-billede">
            <div class="card-block">
                <h4 class="card-title products__name"><?=$cardRow['name']?></h4>
                <p class="card-text products__description"><?=$cardRow['description']?></p>
                <a href="#" class="products__price"><?=$cardRow['price']?> kr</a>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</section>

<br>

<!--TWITCH EMBEDDED-->
<section id="livestream" class="container text-center">
        <h2 class="bold-text">Følg os Live</h2>
        <!-- https://dev.twitch.tv/docs/embed-->

  <!-- Add a placeholder for the Twitch embed -->
  <div id="twitch-embed"></div>

  <!-- Load the Twitch embed script -->

        <script src="https://embed.twitch.tv/embed/v1.js"></script>


        <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
 <script type="text/javascript">
            new Twitch.Embed("twitch-embed", {
                width: "99%",
                height: 480,
                channel: "dinnoedhjaelp",
                autoplay: "false",
                layout: "video"
            });
        </script>
</section>

<!--FOOTER, JAVASCRIPT & BODY (end)-->
<?php include('assets/incl/footer.php'); ?>
