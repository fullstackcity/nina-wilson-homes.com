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
          <h1>Things To Do in Corpus Christi</h1>
          <p><i class="fa fa-2x fa-home" aria-hidden="true"></i><a href="../../index.php"> Home</a>  /  Resources  /  Things To Do In Corpus Christi</p>
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

        <!-- Second row -->
        <div class="row featured-partners-row">

          <div class="col-sm-4 col-sm-4-featured-partners">
            <div class="col-sm-4-style">
              <img class="img-responsive" src="../../images/101-Corpus-Christi-Things-To-Do.png" alt="101 Corpus Christi Things To Do">
              <div class="text-content">
                <div class="text-within-text-content">
                  <h2>101 Corpus Christi</h2>
                  <h3>Things To Do In Corpus Christi</h3>
                  <h3 style="font-weight:bold;"><a target="_blank" href="https://www.101corpuschristi.com/events"><i class="fa fa-3x fa-globe" aria-hidden="true"></i></a></h3>
                </div>
              </div>
            </div>

          </div>
          <div class="col-sm-4 col-sm-4-featured-partners">
            <div class="col-sm-4-style">
              <img class="img-responsive" src="../../images/Caller-Events-Things-To-Do-In-Corpus-Christi-Texas.png" alt="Caller Events Things To Do In Corpus Christi">
              <div class="text-content">
                <div class="text-within-text-content">
                  <h2>Caller Times Events</h2>
                  <h3>Things To Do In Corpus Christi</h3>
                  <h3 style="font-weight:bold;"><a target="_blank" href="http://events.caller.com"><i class="fa fa-3x fa-globe" aria-hidden="true"></i></a></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 col-sm-4-featured-partners">
            <div class="col-sm-4-style">
              <img class="img-responsive" src="../../images/Visit-Corpus-Christi-Tx-Things-To-Do.png" alt="Visit Corpus Christi TX Things To Do">
              <div class="text-content">
                <div class="text-within-text-content">
                  <h2>Visit Corpus Christi</h2>
                  <h3>Things To Do In Corpus Christi</h3>
                  <h3 style="font-weight:bold;"><a target="_blank" href="http://www.visitcorpuschristitx.org/index.aspx"><i class="fa fa-3x fa-globe" aria-hidden="true"></i></a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Second row -->

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

