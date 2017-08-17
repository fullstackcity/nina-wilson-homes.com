<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# profile: http://ogp.me/ns/profile#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come firts in the head; any other head
         contents must come *after* these tags -->
    <title>Nina Wilson, Realtor® - Corpus Christi, TX</title>
    <meta name="description" content="Nina Wilson epitomizes integrity, energy, hard work, and creative service in every detail of your real estate transaction. Nina was born in Corpus Christi, TX">

    <meta property="fb:app_id" content="116140705671705" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@promiselandprop">
    <meta name="twitter:creator" content="@fullstackcity">
    <meta property="og:type"   content="profile" />
    <meta property="og:url"    content="https://www.ninawilsonhomes.com/bio/index.php" />
    <meta property="og:title"  content="Nina Wilson, Realtor® - Corpus Christi, TX" />
    <meta property="og:image"  content="https://www.ninawilsonhomes.com/images/nina-wilson-realtor-corpus-christi-texas-area.jpg" />
    <meta property="og:site_name" content="Promise Land Properties"/>
    <meta property="og:description" content="Nina Wilson epitomizes integrity, energy, hard work, and creative service in every detail of your real estate transaction. Nina was born in Corpus Christi, TX" />



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
          <h1>Bio</h1>
          <p><i class="fa fa-home" aria-hidden="true"></i><a href="#"> Home</a>  /  Bio</p>
        </div>
      </div>
    </div>
    <!-- Bio header image container -->

    <!-- About Me Container -->
    <div class="about-me">

      <div class="container">

		<div id="errorSellForm"><?php echo $errorMainForm.$successMessageMainForm; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
        <div id="error"><?php echo $error.$successMessage; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
      <!-- about-me-row -->
      <div class="row">

        <!-- photo -->
        <div class="col-sm-4 photo">
          <div class="photo-style">
            <img src="../images/nina-wilson-realtor-corpus-christi-texas-area.jpg" class="img-responsive"  alt="Nina Wilson a realtor in Corpus Christi, Texas Area.">
          </div>
        </div>
        <!-- /photo -->

        <!-- paragraph -->
        <div class="col-sm-8 ">
          <div class="paragraph">
            <h2>Nina Wilson</h2>
            <p>Nina Wilson epitomizes integrity, energy, hard work, and creative service in every detail of your real estate transaction. Nina was born in Corpus Christi, TX. Having performed mostly as a buyer’s agent her dream of helping you realize your dream of home ownership is close to her heart, because as a child she and her family never owned a home, or never even thought it would be possible. Her real estate business is her longest working effort.</p>

  	        <p>Nina is a football fan, no not the DAL Cowboys, but the NO SAINTS. Nina spends most NFL Sunday’s with her husband and best friend Michael. Nina grew up in Ft. Worth, TX and moved back to Corpus Christi when she was 18. Spending time as a teenager in Ft. Worth instilled in her love for the outdoors. Nina and her family enjoy boating and swimming. When she is not on a boat you can find her riding her 2013 Harley Davidson “Fatboy”.  Nina is an active “Glamma” to her 3 grandchildren, and also enjoys cooking, reading and studying the word of GOD.</p>

            <p>The ocean is a place where Nina spends a lot of time and enjoys its majestic calmness and strength there she is able to work on her spiritual Relationship with JESUS CHRIST. Ministry participation is important to Nina and she feels a strong draw towards being a servant in the body of CHRIST. As a result, she is currently a member of New Life Church and has had several ministries with the county and state detention centers for women in our Community.</p>

            <p>Nina uses her experience and foresight to proactively address details before they become a problem. She and her team work closely with all clients to ensure a non-problematic, enjoyable, life altering sale or buy. She initiates communication in every detail of the transaction, from the first phone call all the way to close. She leads and educates and most importantly motivates her clients and their families in the art of real estate with communication being the key to your keys. Five words you can count on from Nina Wilson love, integrity, commitment, passion and fun.</p>
            <div class="row">
            	<div class="col-sm-12">
              		<div class="slogan">
                		<h3>"Real Estate is My Buisness, GOD is My Source!"</h3>
              		</div>
            	</div>
            </div>
            <div class="buttons-contact-review">
            	<button data-toggle="modal" data-target=".contact-modal">Contact Nina</button>
            	<a href="../testimonials/index.php"><button type="button" name="button" id="test-button">Client Reviews</button></a>
            </div>
          </div>
        </div>
        <!-- paragraph -->

      </div>
      <!-- about-me-row -->
      </div>
    </div>
    <!-- About Me Container -->
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
