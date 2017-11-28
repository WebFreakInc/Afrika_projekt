<!DOCTYPE html>
<?php include('assets/incl/head.php'); ?>

<body style="background-color:#DABCA0;">

    <!--NAVBAR-->
    <header>
        <?php include('assets/incl/navbar.php'); ?>  
    </header>

    <!--HERO IMAGE MED LOGO-->



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
        
        <?php include('assets/incl/donatesliders.php'); ?> 
        
    </section>




    <!--FOOTER CONTACT-->
    <footer class="container-fluid">
        <?php include('assets/incl/footer.php'); ?> 

    </footer>







</body>



