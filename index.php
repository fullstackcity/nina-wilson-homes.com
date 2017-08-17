<?php
  include("contact-form/index.php");
  require_once("write-a-review-2/index.php");
?>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<!DOCTYPE html>
<html lang="en">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come firts in the head; any other head
             contents must come *after* these tags -->
        <title>Nina Wilson, Realtor® - Promise Land Properties - Corpus Christi, TX</title>

        <meta name="description" content="Nina Wilson, Realtor® and Promise Land Properties are passionate about to guiding you every step of the way when buying a new home in Corpus Christi, Tx. ">
        <meta property="fb:app_id" content="116140705671705" />
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@promiselandprop">
        <meta name="twitter:creator" content="@fullstackcity">

        <meta property="og:type"   content="website" />
        <meta property="og:url"    content="https://ninawilsonhomes.com/index.php" />
        <meta property="og:title"  content="Nina Wilson, Realtor® - Promise Land Properties - Corpus Christi, TX" />
        <meta property="og:description" content="Nina Wilson, Realtor® and Promise Land Properties are passionate about to guiding you every step of the way when buying a new home in Corpus Christi, Tx. " />
        .com
        <meta property="og:image"  content="https://www.ninawilsonhomes.com/images/overlapping-pools-ocean-view-define-coastal-home-1-pools-view.jpg" />

        <?php
          include_once('style/head-tags.php');
        ?>

        <link rel="stylesheet" href="index.css">
        <style media="screen">
          .h4-25 {
            font-family: 'Raleway', sans-serif;
            font-size: 18px;
            font-weight: 600;
            line-height: 30px;
          }
          .h4-25 i {
            margin-right: 15px;
            font-size: 30px;
            color: #552648;
          }
          .h4-25 i img {
            width: 30px;
          }
          .panel-title a:hover, .panel-title a:active, .panel-title a:visited, .panel-title a:focus{
            text-decoration: none;
            color: rgb(51, 51, 51);
          }
        </style>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="style/slide-navbar.css">
        <link rel="stylesheet" href="style/footer.css">

    </head>
    <body>

      <?php
        include("navbar/index.php");
      ?>

	<!-- Slide Nav -->
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Padre Island 200K ></a>
        <a href="#">Corpus Christi Bay 200K ></a>
        <a href="#">Corpus Christi 100k - 199K</a>
        <a href="#">Corpus Christi 200 - 299K</a>
        <a href="#">Corpus Christi 300K ></a>
      </div>
      <!-- /Slide Nav -->
      <!-- Swiper -->
      <div class="swiper-container swiper-container-one" id="swiper-container-one">

          <!-- Swiper Images -->
          <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-one" id="img-2">
              <div class="text slide-titles">
                <h1>Nina Wilson, Realtor®</h1>
                <h2>Promise Land Properties In The Corpus Christi area</h2>
                <button type="button" name="button"><a href="tel:+1-361-596-6462">Call Now</a></button>
                <!-- <button type="button" name="button" onclick="openNav()">Find A Home</button> -->
              </div>
            </div>
              <div class="swiper-slide swiper-slide-one" id="img-3">
                <div class="text slide-titles">
                  <h1>Promise Land Properties</h1>
                  <h2>A company that represents you, a buyer or seller in the corpus christi area.</h2>
                  <button type="button" name="button"><a href="plp/index.php">View More</a></button>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-one" id="img-4">
                <div class="text slide-titles">
                  <h1>CALCULATE YOUR PAYMENTS</h1>
                  <h2>USE MORTGAGE CALCULATOR TO SEE HOW MUCH HOME YOU CAN AFFORD</h2>
                  <button type="button" name="button"><a href="mortgage-calculator/index.php">CALCULATOR</a></button>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-one" id="img-1">
                <div class="text slide-titles">
                  <h1>Leave A Review</h1>
                  <h2>SEE WHAT CLIENTS ARE SAYING ABOUT NINA WILSON</h2>
                  <button type="button" name="button"><a href="testimonials/index.php">READ A REVIEW</a></button>
                  <button type="button" name="button"><a href="testimonials/index.php">WRITE A REVIEW</a></button>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-one" id="img-5">
                <div class="text slide-titles">
                  <h1>Resources</h1>
                  <h2>Nina Relies on a team of experts and resources that will help you along the way.</h2>
                  <button type="button" name="button"><a href="resources/featured-partners/index.php">PARTNERS</a></button>
                  <button type="button" name="button"><a href="resources/things-to-do-corpus-christi/index.php">THINGS TO DO</a></button>
                  <button type="button" name="button"><a href="resources/down-payment-assistance/index.php">FREE MONEY</a></button>
                </div>
              </div>
          </div>
          <!-- /Swiper Images -->
          <!-- <img src="images/atc-yard-sign.jpg" alt="" id="atc-img"> -->
          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination-one"></div>
          <!-- /Add Pagination -->
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white swiper-button-next-one"></div>
          <div class="swiper-button-prev swiper-button-white swiper-button-prev-one"></div>
          <!-- /Add Arrows -->

        </div>
        <!-- /Swiper -->

      	<!-- one or the other will be displayed. However, not both a once. -->
        <div id="errorSellForm"><?php echo $errorMessageReview.$successMessageReview; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
      	<div id="errorSellForm"><?php echo $errrorNewsletterForm.$successMessageNewsletterForm; ?></div>
		    <div id="errorSellForm"><?php echo $errorMainForm.$successMessageMainForm; ?></div>
        <div id="error"><?php echo $error.$successMessage; ?></div>

        <!-- Meet Nina-->
        <div class="meet-nina" id="meet-nina">
          <h3 style="text-align: center;"><span style="font-weight:bold; color:rgb(82, 53, 115);">MEET</span> Nina Wilson</h3>
          <hr id="hr-one">
          <hr id="hr-two">
          <p>Nina grew up in Corpus Christi, TX and has been a licensed realtor for over 10 years. Working mostly with buyers she brings an analytical mind and sharp negotiation skills to every real estate transaction. She initiates communication in every detail of the transaction, educates, and most importantly motivates her clients in the art of real estate with communication being the key. Two words you can count on from Nina are integrity and commitment.</p>

          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 learn-more" id="learn-more">
                <button type="button" name="button"><a href="bio/index.php">LEARN MORE</a></button>
              </div>
              <div class="col-md-6 get-in-touch" id="get-in-touch">
                <button data-toggle="modal" data-target=".bs-example-modal-lg" style="color:rgb(82, 53, 115);">GET IN TOUCH</button>
              </div>
            </div>
          </div>

        </div>
        <!-- /Meet Nina -->

        <!-- Find a home -->
        <div class="container-fluid" id="modules">
          <!-- row -->
          <div class="row">

            <!-- col-md-6 -->
            <div class="col-md-6">
              <div class="modules-img-div">
                <img style="border-radius: 3px;" src="images/Great-Purple-Living-Room.png" class="img-responsive" alt="">
              </div>
            </div>
            <!-- /col-md-6 -->

            <!-- col-md-6 -->
            <div class="col-md-6">
              <!-- modules-col-right -->
              <div id="modules-col-right">











                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        <h4 class="h4-25"><i><img src="images/realtor-logo-promise-land-properties.png" alt="Realtor Logo For Promise Land Properties"></i> Why choose a Realtor?</h4></a>
                      </h4>
                    </div>

                    <div id="collapse1" class="panel-collapse collapse icon-h1-para">
                      <div class="panel-body">
                        <p>People use the terms REALTOR® and real estate agent interchangeably, but that is incorrect. Not every real estate agent is a REALTOR®. There are differences between REALTORS® and real estate agents. They are not the same. Although both are licensed to sell real estate, the main difference between a real estate agent and a REALTOR® is a REALTOR® is a member of the National Association of REALTORS®.</p>
                        <p>REALTOR® must subscribe to the REALTOR® Code of Ethics. There are 17 Articles in the Code of Ethics. To many consumers, this matters. If you are wondering why the Code of Ethics matter to a consumer, read on.</p>

                        <div class="panel-group" id="accordion2">
                           <div class="panel panel-default">
                               <div class="panel-heading">
                                   <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeOne"><h4>About The Code Every REALTOR® Must Follow</h4>
                                       </a>
                                   </h4>
                               </div>
                               <div id="collapseThreeOne" class="panel-collapse collapse icon-h1-para">
                                   <div class="panel-body"><a href="#"><p>The Code of Ethics is strictly enforced by local real estate boards. The 17 Articles of the Code of Ethics also contains various underlying Standards of Practice. It's not just a bunch of rules that agents swear to uphold and adhere to because their broker made them join the Board. The Standards are much more restrictive and confining to conduct than those state guidelines governing agents who simply hold a real estate license.</p></a></div>
                               </div>
                           </div>
                           <div class="panel panel-default">
                               <div class="panel-heading">
                                   <h4 class="panel-title">
                                       <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThreeTwo"><h4>Each Article Carries Weight To A REALTOR®</h4>
                                       </a>
                                   </h4>
                               </div>
                               <div id="collapseThreeTwo" class="panel-collapse collapse icon-h1-para">
                                   <div class="panel-body"><p>Each of the 17 Articles carries weight to a Realtor in her every-day business practice, but one article typically stands above the rest. It is the basis for the way a Realtor operates. Fortunately, it is the first Article, which sets the tone. Nowhere does it state the Realtor must be fair to all parties, such as a listing agent dealing with a buyer's agent, but a Realtor must be honest.</p>
                                   <p>Above all, however, the Realtor must pledge to put the interests of her clients above her own. </p></div>
                                   <!-- <p><a href="#">7 Reasons to Work with a REALTOR®</a></p> -->
                               </div>
                           </div>
                       </div>
                      </div>
                    </div>

                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        <h4 class="h4-25"><i class="fa fa-search" aria-hidden="true"></i> "What’s my mortgage payment?" The most asked question.</h4></a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse icon-h1-para" data-toggle="modal" data-target=".what-is-my-payment">
                      <div class="panel-body"><p>As a realtor I need to work with the best team possible. It is a team effort that includes your Lender, Your Realtor and a Closing officer with a Title Company. I just want to make sure that my clients are taken care of and that they have their closing date.<span style="color: rgb(168, 145, 184)"> Learn More... </span></p></div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        <h4 class="h4-25"><i class="fa fa-question-circle" aria-hidden="true"></i> How Can A Realtor Help Me Buy A Home?</h4></a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse icon-h1-para">
                      <div class="panel-body">
                        <a href="buyers-info/index.php" target="_blank">
                          <p>Buying a home can be an overwhelming process. From financing to negotiating to closing, there are a lot of moving pieces that can leave homebuyers bewildered. A real estate agent can help guide you through each step of the buying process, offering sound advice along the way. By working with a professional agent who knows the ins and outs of the real estate industry, you’ll not only end up with a great home, but you’ll also walk away with a great experience. Here are some of the key areas that an agent can help you with: <strong>Getting pre-approved by a lender, Choosing a home, Making an offer. </strong><span style="color: rgb(168, 145, 184)"> Learn More... </span>
                          </p>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                        <h4 class="h4-25"><i class="fa fa-dollar" aria-hidden="true"></i>  Get Your Free Home Valuation</h4></a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse icon-h1-para">
                      <div class="panel-body"> <a href="sellyourhome/index.php" target="_blank"><p>I will provide you with comparable sale information for your neighborhood and a range of approximate values for your home.<span style="color: rgb(168, 145, 184)"> Learn More... </span></p>
                      </a></div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                        <h4 class="h4-25"><i class="fa fa-info-circle" aria-hidden="true"></i> Questions To Ask Before Selling Your Home</h4></a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse icon-h1-para">
                      <div class="panel-body"> <a href="sellers-info/index.php" target="_blank"><p>Selling your home is a big financial and emotional task, which requires lots of planning.
                        <br>So before you decide to put your home on the market, here are four questions to consider:
                        <br><strong>1. What is my home worth?</strong>
                        <br><strong>2. How can I sell at the highest price possible?</strong>
                        <br><strong>3. How long will my home be on the market?</strong>
                        <br><strong>4. How can a realtor help?</strong><span style="color: rgb(168, 145, 184)"> Learn More... </span></p></a></div>
                    </div>
                  </div>






                </div>

                <!-- Find Your Dream Home -->
                <!-- <div class="icon-title-para-style">
                  <div class="i-background">
                    <i class="fa fa-3x fa-search" aria-hidden="true" style="float:left;"></i>
                  </div>

                  <div class="icon-h1-para" data-toggle="modal" data-target=".what-is-my-payment">
                     <a href="#">
                      <h1 style="line-height: 20px;"> </h1>
                      <p>As a realtor I need to work with the best team possible. It is a team effort that includes your Lender, Your Realtor and a Closing officer with a Title Company. I just want to make sure that my clients are taken care of and that they have their closing date.<span style="color: rgb(168, 145, 184)"> Learn More... </span></p>
                    </a>
                  </div>

                </div> -->
                <!-- /Find Your Dream Home -->

                <!-- Buyers Info -->
                <!-- <div class="icon-title-para-style">


                  <div class="i-background">
                    <i class="fa fa-3x fa-question-circle" aria-hidden="true"></i>
                  </div>

                  <div class="icon-h1-para">
                    <a href="buyers-info/index.php">
                        <h1 id="s-y-h">How Can A Realtor Help Me Buy A Home?</h1>
                        <p>Buying a home can be an overwhelming process. From financing to negotiating to closing, there are a lot of moving pieces that can leave homebuyers bewildered. A real estate agent can help guide you through each step of the buying process, offering sound advice along the way. By working with a professional agent who knows the ins and outs of the real estate industry, you’ll not only end up with a great home, but you’ll also walk away with a great experience. Here are some of the key areas that an agent can help you with: <strong>Getting pre-approved by a lender, Choosing a home, Making an offer. </strong><span style="color: rgb(168, 145, 184)"> Learn More... </span></p>
                    </a>
                  </div>
                </div> -->
                <!-- /Buyers Info -->


                <!-- Get Your Free Home Valuation -->
                <!-- <div class="icon-title-para-style">
                  <div class="i-background">
                    <i class="fa fa-3x fa-dollar" aria-hidden="true"></i>
                  </div>

                  <div class="icon-h1-para">
                      <a href="sellyourhome/index.php">
                          <h1 id="h-m-i-y-h-w">Get Your Free Home Valuation</h1>
                          <p>I will provide you with comparable sale information for your neighborhood and a range of approximate values for your home.<span style="color: rgb(168, 145, 184)"> Learn More... </span></p>
                      </a>
                  </div>
                </div> -->
                <!-- /Get Your Free Home Valuation -->

                <!-- Sellers Info -->
                <!-- <div class="icon-title-para-style">
                  <div class="i-background">
                    <i class="fa fa-3x fa-info-circle" aria-hidden="true"></i>
                  </div>

                  <div class="icon-h1-para">
                      <a href="sellers-info/index.php">
                          <h1 id="h-m-i-y-h-w">4 Questions To Ask Before Selling Your Home</h1>
                          <p>Selling your home is a big financial and emotional task, which requires lots of planning.
                            <br>So before you decide to put your home on the market, here are four questions to consider:
                            <br><strong>1. What is my home worth?</strong>
                            <br><strong>2. How can I sell at the highest price possible?</strong>
                            <br><strong>3. How long will my home be on the market?</strong>
                            <br><strong>4. How can a realtor help?</strong><span style="color: rgb(168, 145, 184)"> Learn More... </span></p>

                      </a>
                  </div>
                </div> -->
                <!-- /Sellers Info -->

              </div>
              <!-- /modules-col-right -->
            </div>
            <!-- /col-md-6 -->
            <!-- Modal -->
            <div class="modal fade what-is-my-payment" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document" id="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">A Team Effort</h4>
                  </div>
                  <div class="modal-body" style="color: #FFF; font-size: 23px; text-shadow:1px 3px 3px #000;">

                    <p style="margin-bottom: 20px;">As a realtor I need to work with the best team possible. This is a team effort that includes your Lender, Your Realtor and a Closing officer with a Title Company. ?” I just want to make sure my customer is taken care of and that they have their closing date.</p>

                    <p style="margin-bottom: 20px;">My expertise is not in lending nor is it in title work so I am able to refer you to those experts that have the right expertise and answers. </p>

                    <p style="margin-bottom: 20px;">As much as 31% of borrowers are concerned or confused by the paperwork required by a mortgage and honestly it is a lot, disclosures can be 40 or 50 pages it is imperative that the right expert on our team is discussing and or answering any questions you may have. A buyer really needs a trusted <span style="text-decoration:underline;">mortgage professional</span> to sit down and walk you through it.</p>

                    <p style="margin-bottom: 20px;">The same is true with a title commitment on a property.   A closing officer can explain any clouds or questions that may come up, they are the experts after all that is what they do insure and clear the title for lending.  Overall make sure you keep everyone in the loop, and make sure you take the time – really take the time we need to do a good job educating our the customer. </p>

                    <p style="margin-bottom: 20px;">“You have to provide transparency and you have to make sure you’re a good communicator. That’s involved in any relationship in life, right?”</p>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <a href="resources/featured-partners/index.php"><button type="button" id="submit-contact-modal-button" class="btn btn-success pull-right" name="button">See Featured Partners</button></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->

          </div>
          <!-- /row -->
        </div>
        <!-- /Find a home -->

        <!-- News -->
        <div class="container-fluid news-image" id="news-container">
          <!-- toe -->
          <div class="toe">
            <!-- row -->
            <div class="row">
              <!-- col-sm-12 -->
              <div class="col-sm-12">
                <!-- news-left-style -->
                <div class="news-left-style">
                  <h1>Find Your Dream Home</h1>

                  <div class="btn-group btn-group-justified" role="group" aria-label="...">
                    <div class="btn-group action" data-content="#bottomContent" role="group">
                      <span type="span" class="btn active buy-rent-sold-spans">BUY</span>
                    </div>
                    <div class="btn-group action" data-content="#bottomContent1" role="group">
                      <a href="sellyourhome/index.php"><span type="span" class="btn buy-rent-sold-spans">SELL</span></a>
                    </div>
                  </div>


                  <!-- Find A Home - Form -->
                  <div class="content" id="bottomContent">
                    <form action="/find-your-dream-home/index.php#results-wrap" method="get">
                      <div class="input-group find-a-home-input-group input-group-lg">
                        <input type="text" class="form-control" name="buy_a_home_search" placeholder=" Address, City, or Zip" aria-describedby="basic-addon2" id="find-a-home-search">
                        <span type="submit" class="input-group-addon" id="find-a-home-button"><button>GO!</button></span>
                      </div>
                    </form>
                  </div>
                  <!-- /Find A Home - Form -->


                  <!-- Rent A Home - Form -->
                  <!-- <div class="content" id="bottomContent1">
                    <form action="/findyourdreamhome/index.php" method="post">
                      <div class="input-group find-a-home-input-group input-group-lg">
                        <input type="text" class="form-control" name="rent_a_home_search" placeholder="Address, City, or Zip" aria-describedby="basic-addon2" id="find-a-home-search">
                        <span type="submit" value="Submit" class="input-group-addon" id="find-a-home-button"><button>GO!</button></span>
                      </div>
                    </form>
                  </div>
                  <div class="content" id="bottomContent2"> -->
                    <!-- /Rent A Home - Form -->

                </div>
                <!-- /news-left-style -->
              </div>
              <!-- /col-sm-12 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /toe -->
        </div>
        <!-- /News -->
        <!-- Subscribe to News Letter -->
        <div class="newsletter">
          <h1>subscribe to my newsletter</h1>

          <form class="form-inline" method="post">
            <div class="input-group subscribe-fashion input-group-lg">
              <input type="email" class="form-control" placeholder="Email Address" aria-describedby="basic-addon2" style="float:left;" required name="subscribe_email">
              <button type="submit" class="input-group-addon" id="basic-addon2" name="news_letter_submit"style="width:100%; border-radius: 2px;">subscribe</button>
            </div>
          </form>

        </div>
        <!-- /Subscribe to News Letter -->

        <?php
            include_once("footer/footer.php");
            include_once("js/script-tags.php");
        ?>
        <script type="text/javascript" src="index.js"></script>
        <script type="text/javascript" src="js/swiper.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
          $( function() {
            var availableTags = [
              "Corpus Christi",
              "78404",
              "South Side",
              "Flour Bluff",
              "Barataria Bay",
              "Ports O'Call",
              "78418",
              "78414",
              "78412",
              "78413",
              "78411",
              "78415",
              "Hewit Estates",
              "La Concha Estates",
              "South Shores Estates",
              "Waverly Estates",
              "Kings Crossing",
              "Cano Del Oso",
              "Grange Park",
              "Padre Island",
              "Airline",
              "Ocean Dr",
              "Manhattan Estates",
              "South Lake Estates",
              "Wood Estates",
              "Country Club Estates",
              "Club Estates",
              "Royal Creek Estates",
              "Lake Placid Estates",
              "George Estates",
              "Del Mar",
              "Poenisch"
            ];
            $( "#find-a-home-search" ).autocomplete({
              source: availableTags
            });
          } );
        </script>
    </body>
</html>
