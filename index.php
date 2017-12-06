<!-- HEAD, HEADER & BODY (start) -->
<?php include('assets/incl/head.php');?>


    <!--HERO IMAGE MED LOGO-->
    <section class="section__hero">
        <picture>
            <source srcset="assets/img/hero.jpg">
            <img class="hero__img" src="assets/img/hero.jpg" alt="Anja-Lovén-med-heksebørn">
        </picture>
        <img src="assets/img/logo-brown.svg" class="hero__img--logo">
    </section>

    <!--TOTAL ACCUMULATED-->
    <?php include('assets/incl/counter.php');?>



<!--INFO TEXT-->
<section id='infotext' class='container'>
  <div class="row">
    <article class='col-6'>
      <h2>Produkterne</h2>
      <p>Elever på grundforløb 1 på flere forskellige uddannelser, har i et par måneder arbejdet med at udvikle og konstruere
        en lang række produkter, som sælges til fordel for DINNødhjælp. Der er fuglehuse, kaninbure, bænke, skamler og champagnekølere.
        Der er krukker, lysestager, hylder og mange andre forskellige produkter. Alle tingene bliver sat til salg på facebookgruppen
        "Hjælp Afrika (TECHCOLLEGE)".</p>
    </article>

    <article class='col-6'>
      <h2>Donationer</h2>
      <p>Man kan betale kontant eller via MobilPay tlf.: 2526 6638 (modtager "Elevforum, Media og Projekt Afrika").</p>

      <h2>Fundraising</h2>
      <p>Produkterne sælges også på en fysisk auktion på: TECHCOLLEGE i: Konference N207 på TECHCOLLEGE, Øster Uttrup Vej 1
        i Aalborg. Man er velkommen til at møde op på dagen.</p>
    </article>
  </div>
</section>


<!--PRODUCTS-->

<section class="container">
<?php include('assets/incl/isotopes.php'); ?>
</section>



<!--TWITCH EMBEDDED-->


<section id="livestream" class="container text-center">


        <h2>Følg os Live</h2>
        <!-- https://dev.twitch.tv/docs/embed-->

  <!-- Add a placeholder for the Twitch embed -->
  <div id="twitch-embed"></div>

  <!-- Load the Twitch embed script -->

        <script src="https://embed.twitch.tv/embed/v1.js"></script>


        <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
        <script type="text/javascript">
            new Twitch.Embed("twitch-embed", {
                width: "80%",
                height: 480,
                channel: "dinnoedhjaelp",
                layout: "video"
            });
        </script>

</section>

<!--DONATIONS-->
<section class="container-fluid">

  <?php include('assets/incl/donateSliders.php'); ?>

</section>




<!--FOOTER, JAVASCRIPT & BODY (end)-->
<?php include('assets/incl/footer.php'); ?>
