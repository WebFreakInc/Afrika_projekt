<!-- HEAD, HEADER & BODY (start) -->
<?php
include('assets/incl/head.php'); 
include('assets/incl/counter.php');
?>


<!--HERO IMAGE MED LOGO-->
<picture class="container">
  <img href="assets/img/hero.jpg" alt="Anja-Lovén-med-heksebørn">
</picture>


<!--TOTAL ACCUMULATED-->
<section class="counter container-fluid text-center">
  <h2></h2>
</section>


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


<!-- ANOTHER ONE -->

<div class="container">
  <h2 class="">Work</h2>
  <div id="filters" class="button-group filters-button-group">
    <button class="button is-checked" data-filter="*">show all</button>
    <button class="button" data-filter=".ads">Ads</button>
    <button class="button" data-filter=".books">Books</button>
    <button class="button" data-filter=".flyers">Flyers</button>
    <button class="button" data-filter=".logos">Logos</button>
    <button class="button" data-filter=".websites">Websites</button>
  </div>

  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      Dropdown
    </button>
    <div id="filters" class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <button class="button is-checked" data-filter="*">show all</button>
      <button class="button dropdown-item" data-filter=".ads">Ads</button>
      <button class="button dropdown-item" data-filter=".books">Books</button>
      <button class="button dropdown-item" data-filter=".flyers">Flyers</button>
      <button class="button dropdown-item" data-filter=".logos">Logos</button>
      <button class="button dropdown-item" data-filter=".websites">Websites</button>
      <!--
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
-->
    </div>
  </div>


  <div class="row grid data-isotope='{ " itemSelector ": ".grid-item ", "masonry ": { "columnWidth ": 200 } }'">

    <!-- CATAGORI 1 -->
    <div class="col-6 col-md-3 grid-item websites" data-category="websites">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
      </a>
    </div>

    <div class="col-6 col-md-3 grid-item websites" data-category="websites">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
      </a>
    </div>

    <div class="col-6 col-md-3 grid-item websites" data-category="websites">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
      </a>
    </div>

    <div class="col-6 col-md-3 grid-item websites" data-category="websites">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg">
      </a>
    </div>


    <!-- CATAGORI 2 -->
    <div class="col-6 col-md-3 grid-item flyers" data-category="flyers">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
      </a>
    </div>

    <div class="col-6 col-md-3 grid-item flyers" data-category="flyers">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
      </a>
    </div>

    <div class="col-6 col-md-3 grid-item flyers" data-category="flyers">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
      </a>
    </div>

    <div class="col-6 col-md-3 grid-item flyers" data-category="flyers">
      <a href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
        <img style="width:100%;" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg">
      </a>
    </div>






    <div class="col-6 col-md-3 grid-item ads" data-category="ads">
      <a href="http://ascenddev.com/img/projects/lothflyer.jpg">
        <img src="http://ascenddev.com/img/projects/lothflyer.jpg">
      </a>
    </div>
    <div class="col-6 col-md-3 grid-item books" data-category="books">
      <a href="http://ascenddev.com/img/projects/lothflyer.jpg">
        <img src="http://ascenddev.com/img/projects/lothflyer.jpg">
      </a>
    </div>
    <div class="col-6 col-md-3 grid-item logos" data-category="logos">
      <a href="http://ascenddev.com/img/projects/lothflyer.jpg">
        <img src="http://ascenddev.com/img/projects/lothflyer.jpg">
      </a>
    </div>
    <div class="col-6 col-md-3 grid-item websites" data-category="websites">
      <a href="http://ascenddev.com/img/projects/lothflyer.jpg">
        <img src="http://ascenddev.com/img/projects/lothflyer.jpg">
      </a>
    </div>
    <div class="col-6 col-md-3 grid-item ads" data-category="ads">
      <a href="http://ascenddev.com/img/projects/lothflyer.jpg">
        <img src="http://ascenddev.com/img/projects/lothflyer.jpg">
      </a>
    </div>
    <div class="col-6 col-md-3 grid-item books" data-category="books">
      <a href="http://ascenddev.com/img/projects/lothflyer.jpg">
        <img src="http://ascenddev.com/img/projects/lothflyer.jpg">
      </a>
    </div>
  </div>
</div>



<div class="grid">
  <div class="grid-sizer"></div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
  </div>
  <div class="grid-item">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
  </div>
</div>




</section>


<!--TWITCH EMBEDDED-->


<section id="livestream" class="container text-center">


  <h2>Følg os Live</h2>
  <!-- https://dev.twitch.tv/docs/embed -->

  <!-- Add a placeholder for the Twitch embed -->
  <div id="twitch-embed"></div>

  <!-- Load the Twitch embed script -->


  <!--

        <script src="https://embed.twitch.tv/embed/v1.js"></script>

-->

  <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
  <script type="text/javascript">
    new Twitch.Embed("twitch-embed", {
      width: 854,
      height: 480,
      channel: "monstercat"
    });
  </script>

</section>

<!--DONATIONS-->
<section class="container-fluid">

  <?php include('assets/incl/donateSliders.php'); ?>

</section>




<!--FOOTER, JAVASCRIPT & BODY (end)-->
<?php include('assets/incl/footer.php'); ?>
<script type="text/javascript">
  var autoLoad = setInterval(
    function () {
      $('#counter').load('test.php').fadeIn("slow"); // Target which will be updated
      console.log("updated");
    }, 10000); // refresh page every 10 seconds
</script>