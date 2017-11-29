<!-- HEAD, HEADER & BODY (start) -->
<?php include('assets/incl/head.php'); ?>


    <!--HERO IMAGE MED LOGO-->
    <picture>
        <img href="assets/img/hero.jpg" alt="Anja-Lovén-med-heksebørn">
    </picture>


    <!--TOTAL ACCUMULATED-->
    <section class="container-fluid">
        50000 kr
    </section>


    <!--INFO TEXT-->
    <section class='container'>
        <div class='col-6'></div>

        <div class='col-6'></div>

    </section>


    <!--PRODUCTS-->
    <section class="container">

        <h1>isotopes?</h1>

    </section>


    <!--TWITCH EMBEDDED-->
    <section id="livestream" class="container">
        <h2>Følg os Live</h2>
        <!-- https://dev.twitch.tv/docs/embed -->

        <!-- Add a placeholder for the Twitch embed -->
        <div id="twitch-embed"></div>

        <!-- Load the Twitch embed script -->
        <script src="https://embed.twitch.tv/embed/v1.js"></script>

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




