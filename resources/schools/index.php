<?php
  include("../../contact-form/index.php");
?>
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
    <link rel="icon" href="../../images/nina-wilson-realtor-corpus-christi-texas-area-icon.jpg">

    <?php
      include_once('../../style/head-tags.php');
    ?>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../../style/footer.css">
  </head>
  <body>

    <?php
      include("../../navbar/index-2.php");
    ?>

    <!-- Bio header image container -->
    <div class="container-fluid bio-header-image">
      <div class="bio-header-image-opacity">
        <div class="bio-title">
          <h1>Miscellaneous Resources</h1>
          <p><i class="fa fa-2x fa-home" aria-hidden="true"></i><a href="../../index.php"> Home</a>  /  Resources  /  Miscellaneous Resources</p>
        </div>
      </div>
    </div>
    <!-- Bio header image container -->

    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->
    <div class="featured-partners-wrap">


    <div class="container-fluid featured-partners-container">
    	<div id="errorSellForm"><?php echo $errorMainForm.$successMessageMainForm; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
        <div id="error"><?php echo $error.$successMessage; ?></div> <!-- one or the other will be displayed. However, not both a once. -->


        <!-- Third row -->
        <div class="row featured-partners-row">

          <div class="col-sm-6 col-sm-4-featured-partners">
            <div class="col-sm-4-style">
              <img class="img-responsive" src="../../images/School-Digger-Best-Schools-Corpus-Christi-Texas.png" alt="School Digger Best Schools Corpus Christi Texas">
              <div class="text-content">
                <div class="text-within-text-content">
                  <h2>School Digger</h2>
                  <h3>Best Schools in Corpus Christi</h3>
                  <h3 style="font-weight:bold;"><a href="https://www.schooldigger.com/go/TX/city/Corpus+Christi/search.aspx" target="_blank"><i class="fa fa-3x fa-globe" aria-hidden="true"></i></a></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-sm-4-featured-partners">
            <div class="col-sm-4-style">
              <img class="img-responsive" src="../../images/Corpus-Christi-Regional-Economic-Development-Corp.png" alt="School Digger Best Schools Corpus Christi Texas">
              <div class="text-content">
                <div class="text-within-text-content">
                  <h2>CCREDC</h2>
                  <h3>Economic Development</h3>
                  <h3 style="font-weight:bold;"><a href="http://www.ccredc.com/index.php" target="_blank"><i class="fa fa-3x fa-globe" aria-hidden="true"></i></a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Third row -->
    </div>
    </div>
    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->

    <?php
        require_once("../../database-connection/index.php");
        include_once("../../footer/footer-2.php");
        include_once("../../js/script-tags.php");
    ?>

    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="../../js/contact-form.js"></script>
    <script type="text/javascript"src="../../js/swiper.js"></script>
  </body>
</html>
