<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come firts in the head; any other head
         contents must come *after* these tags -->
    <meta name="keywords" content="Corpus Christi real estate, Corpus Christi homes, Corpus Christi homes for sale, Corpus Christi properties, Corpus Christi listings, Corpus Christi houses for sale, TX real estate, TX homes, TX homes for sale, TX properties, TX listings, TX houses for sale, Nina Wilson, Investor, Corpus Christi Investor, Texas Affordable Housing, Programs, ">
    <title>Nina Wilson Homes - Corpus Christi Realtor</title>

    <?php
    include_once('../style/head-tags.php');
    ?>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../style/footer.css">
  </head>
  <body>

    <?php
      include("../navbar/index-1.php");
    ?>

    <!-- Bio header image container -->
    <div class="container-fluid bio-header-image">
      <div class="bio-header-image-opacity">
        <div class="bio-title">
          <h1>Promise Land Properties</h1>
          <p><i class="fa fa-home" aria-hidden="true"></i><a href="#"> Home</a>  /  Promise Land Properties</p>
        </div>
      </div>
    </div>
    <!-- Bio header image container -->

    <!-- NEW CODE HERE -->
    <!-- NEW CODE HERE -->
    <!-- NEW CODE HERE -->

    <div class="about-me">
        <div class="container">
          <div id="errorSellForm"><?php echo $errorMainForm.$successMessageMainForm; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
        	<div id="error"><?php echo $error.$successMessage; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
            <div class="row">
                <!-- paragraph -->
                <div class="col-sm-12 paragraph">
                  <div class="photo-style">
                    <h2>Welcome to Promise Land Properties</h2>
                    <p>A home is not a home because of its room dimensions or the color of the walls. It is about how you feel when you walk through the front door and the way you can instantly envision your life unfolding there. This is about more than real estate, It is about your life and your dreams. Listening and knowing what type of lifestyle you want to live is as important as knowing how many bedrooms you need. Your home is not only a place for you and your family to call home, a safe haven, your comfort zone, it is also your calling card and should reflect who you are and what you are working hard to become.</p>

                    <h2>Different by design</h2>
          	        <p>Promise Land Properties takes a different approach to real estate, one that is built on personal touches, win-win deals and positive results. Nina Wilson utilizes the latest technologies, market research and business strategies to exceed your expectations. More importantly, she listens. She finds the solutions that are tailored to you and your needs.</p>

                    <h2>Professional Relationships that Matter</h2>
                    <p>Clients are each unique, some relationships have remained all business but some have developed into friendships, either way they are treated individually. I'm proud to say that a high percentage of my business comes from past clients, from people who choose my services time and again. I don't measure my success by sales, but by the relationships built along the way. Relationships that are built with trust, integrity, and honesty.</p>
                  </div>
                </div>
                <!-- paragraph -->
            </div>
        </div>
    </div>
    <!-- NEW CODE HERE -->
    <!-- NEW CODE HERE -->
    <!-- NEW CODE HERE -->

    <?php
        require_once("../database-connection/index.php");
        include_once("../footer/footer-1.php");
        include_once("../js/script-tags.php");
    ?>
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="../js/contact-form.js"></script>
    <script type="text/javascript"src="../js/swiper.js"></script>

  </body>
</html>
