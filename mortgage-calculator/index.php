<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come firts in the head; any other head
         contents must come *after* these tags -->
    <title>Mortgage Calculator - What Will Your Payment Be?</title>
    
    <meta name="description" content="Find out what you payment will be with our mortgage calculator. Nina Wilson and Promise Land Properties want to make sure that your house matches what you will pay monthly to own it. ">
    <meta property="fb:app_id" content="116140705671705" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@promiselandprop">
    <meta name="twitter:creator" content="@fullstackcity">

    <meta property="og:type"   content="website" />
    <meta property="og:url"    content="https://ninawilsonhomes.com/mortgage-calculator/index.php" />
    <meta property="og:title"  content="Mortgage Calculator - What Will Your Payment Be?" />
    <meta property="og:description" content="Find out what you payment will be with our mortgage calculator. Nina Wilson and Promise Land Properties want to make sure that your house matches what you will pay monthly to own it. " />
    .com
    <meta property="og:image"  content="https://www.ninawilsonhomes.com/images/mortgage-calculator-in-corpus-christi-texas-buy-a-home-nina-wilson-realtor.png" />

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
          <h1>Mortgage Calculator</h1>
          <p><i class="fa fa-home" aria-hidden="true"></i><a href="#"> Home</a>  /  Mortgage Calculator</p>
        </div>
      </div>
    </div>
    <!-- Bio header image container -->

    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->

    <div class="container">
    	<div id="errorSellForm"><?php echo $errorMainForm.$successMessageMainForm; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
        <div id="error"><?php echo $error.$successMessage; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
    </div>


    <div class="calculator-section">
      <div class="container calculator-container">
        <div class="row">
          <div class="col-sm-12">
            <!-- Calculator Copyright Calculate Stuff - calculatestuff.com -->
            <h2>Mortgage Calculator</h2>
            <a href="https://www.calculatestuff.com/financial/mortgage-calculator" onclick="window.open('https://www.calculatestuff.com/financial/mortgage-calculator?display_type=popup','Mortgage Calculator','width=700,height=700,resizable=1,scrollbars=1,toolbar=0,menubar=0');return false;"><img class="img-responsive" src="../images/mortgage-calculator-in-corpus-christi-texas-buy-a-home-nina-wilson-realtor.png" alt="Mortgage Calculator to calculate your loans in Corpus Christi, Texas with Nina Wilson as your Realtor."></a>
            <!-- <script src="http://usmortgagecalculator.org/widget/2.0/js/amortizationcalc-loader.min.js" type="text/javascript"></script>
            <div id="acww-widgetwrapper" style="min-width:250px;width:100%;">
                <div id="acww-widget" style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                </div>
                <div id="acww-more" style="background:#333;font:normal 13px/1 Helvetica, Arial, Verdana, Sans-serif;padding:10px 0;color:#FFF;text-align:center;width:100%;clear:both;margin:0;clear:both;float:left;">
                    <a style="background:#333;color:#FFF;text-decoration:none;border-bottom:1px dotted #ccc;" href="http://usmortgagecalculator.org/" title="Mortgage Calculator" rel="nofollow" target="_blank">usmortgagecalculator.org</a>
                </div>
            </div> -->
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-sm-6 calculators">
            <h2>Mortgage Calculator</h2>
            <a href="http://usmortgagecalculator.org" target="_blank">
              <img class="img-responsive" src="../images/mortgage-calculator-in-corpus-christi-texas-buy-a-home-nina-wilson-realtor.png" alt="Mortgage Calculator to calculate your loans in Corpus Christi, Texas with Nina Wilson as your Realtor.">

            </a>
          </div>
          <div class="col-sm-6 calculators">
            <h2>FHA Mortgage Calculator</h2>
            <a href="http://usmortgagecalculator.org/fha-mortgage-calculator/" target="_blank">
              <img class="img-responsive" src="../images/FHA-loan-mortgage-calculator-in-corpus-christi-texas-buy-a-home-nina-wilson-realtor.png" alt="FHA Mortgage Calculator to your loan payments in Corpus Christi, Texas with Nina Wilson as your Realtor.">

            </a>
          </div>
        </div> -->
      </div>
    </div>


    <!-- /NEW CODE GOES HERE! -->
    <!-- /NEW CODE GOES HERE! -->
    <!-- /NEW CODE GOES HERE! -->
    <!-- /NEW CODE GOES HERE! -->
    <!-- /NEW CODE GOES HERE! -->

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
