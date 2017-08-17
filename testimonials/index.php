<?php
  	require_once("write-a-review/index.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come firts in the head; any other head
         contents must come *after* these tags -->
    <meta name="theme-color" content="#523573">
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
          <h1>What Clients Are Saying</h1>
          <p><i class="fa fa-home" aria-hidden="true"></i><a href="#"> Home</a>  /  What Clients Are Saying</p>
        </div>
      </div>
    </div>
    <!-- Bio header image container -->

    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->

    <!-- testimonial-section -->
    <div class="testimonial-section">
      <!-- testimonials container -->
        <div class="container">
          	<div id="errorSellForm"><?php echo $errorMessageReview.$successMessageReview; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
        	<div id="error"><?php echo $error.$successMessage; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
          <!-- testimonials row -->
            <div class="row">
              <div class="col-sm-12 review-errors"></div>
                <?php


                    $sql = "SELECT * FROM `testimonials` ORDER BY date DESC";
                    $result = mysqli_query($dbconnect, $sql);

                        for ($i = 0; $i <= 3; $i++) {
                          $count = 0;
                          echo "<div class='col-sm-4 paragraph'>";
                          echo "<h2 id='reviews-title'>Reviews</h2>";
                          echo "<div class='col-8-style'>";
                          while ($row = mysqli_fetch_array($result) AND $count < 5) {
                            echo "<div class='review'> <!-- Review -->";


                            # Image
                                if ($row['image']) {
                                	echo "<div class='review-image'>";
                                  		echo "<img src='images/". $row['image'] ."' class='img-responsive'>";
                                  	echo "</div>";
                                }


                            # Comments
                            echo "<div class='review-quote'>";
                            echo "<i class='fa fa-quote-left fa-2x pull-left tt_quote_transparency'></i>";
                            echo "<p>\"". $row['comments'] . "\"</p>";
                            echo "</div>";

                            # Client
                            echo "<div class='review-author'>";
                            echo "<h3>". $row['firstname'] ." ". $row['lastname'] ."</h3>";
                            echo "<cite title='Source Title'>". $row['buyerorseller'] ."</cite>";


                            echo "<br>Review Date: ". $row['date']. "<br>";

                             $stars = $row['rating'];
                            switch ($stars) {
                                case "1":
                                	echo $stars . " Star out of 5 ";
                                  	echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                	echo "1/5";
                                    break;
                                case "2":
                                	echo $stars . " Stars out of 5 ";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                	echo "2/5";
                                    break;
                                case "3":
                                	echo $stars . " Stars out of 5 ";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                	echo "3/5";
                                    break;
                                case "4":
                                	echo $stars . " Stars out of 5 ";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star-o' aria-hidden='true'></i>";
                                	echo "4/5";
                                    break;
                                case "5":
                                	echo $stars . " Stars out of 5 ";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                    echo "<i class='fa fa-star' aria-hidden='true'></i>";
                                	echo "5/5";
                                    break;
                                default;
                                    echo "";
                                break;
                            }

                            echo "</div>";


                            echo "</div><!-- /Review -->";
                            $count++;
                        }

                          echo "</div><!-- col-8-style -->";
                          echo "</div><!-- /col-sm-4 -->";
                    }
                ?>

                <!-- Modal Toggle -->
                <div class="write-a-review-icon" data-toggle="modal" data-target=".write-a-review-modal">
                  <a href="#">
                    <i class="fa fa-commenting" aria-hidden="true">
                      <span> Write A Review</span>
                    </i>
                  </a>
                </div>
                <!-- /Modal Toggle -->

                <!-- Modal -->
                <div class="modal fade write-a-review-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <div class="modal-dialog modal-lg" role="document" id="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Write A Review</h4>
                      </div>
                      <div class="modal-body">

                        <form method="post" action="#" enctype="multipart/form-data">
                          <input type="hidden" name="size" value="1000000">
                          <div class="form-group">
                            <label for="name">First Name <span>*</span></label>
                            <input type="text" class="form-control light-gray" id="name" required name="firstname">
                          </div>
                          <div class="form-group">
                            <label for="text">Last Name <span>*</span></label>
                            <input type="text" class="form-control light-gray" id="name" required name="lastname">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1">Relationship <span>*</span></label>
                            <select type="text" class="form-control light-gray" id="exampleInputPassword1" required name="buyerorseller">
                              <option></option>
                              <option>Buyer</option>
                              <option>Seller</option>
                              <option>Colleague</option>
                            </select>
                          </div>


                            <div class="form-group">
                              <label for="exampleInputPassword1">5 Star Rating - 1 = bad, 5 = best (
                                <i class="fa fa-star" aria-hidden="true" style="color:white;"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:white;"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:white;"></i>
                                <i class="fa fa-star-o" aria-hidden="true" style="color:white;"></i>
                                <i class="fa fa-star-o" aria-hidden="true" style="color:white;"></i>)<span>*</span>
                              </label>

                              <select type="num" class="form-control light-gray" id="exampleInputPassword1" name="rating" required>
                                <option></option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select>
                            </div>


                          <div class="form-group">
                            <label for="textarea">What Would You Like To Say? <span>*</span></label>
                            <textarea name="comments" rows="4" cols="80" type="text" class="form-control light-gray" required id="textarea"></textarea>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputFile">Date <span style="font-weight:normal; color:white;">(yyyymmdd)</span> <span>*</span></label>
                            <input type="date" class="form-control light-gray" id="reviewdate" name="date" required placeholder="yyyymmdd" style="color: white;">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputFile">Upload A Photo Of New Home</label>
                            <input type="file" id="exampleInputFile" name="image" style="color:white;">
                          </div>


                          <input type="submit" class="btn btn-default pull-right" id="submit-contact-modal-button" name="submit_review" value="Submit">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </form>



                      </div>
                      <div class="modal-footer">

                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->


            </div>
            <!-- /testimonials row -->
        </div>
        <!-- testimonials container -->
    </div>
    <!-- /testimonial-section -->


    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->

    <?php
        include_once("../footer/footer-1.php");
        include_once("../js/script-tags.php");
    ?>
	<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
  <script type="application/ld+json">
  [ {
    "@context" : "http://schema.org",
    "@type" : "LocalBusiness",
    "priceRange": "$$$$$$",
    "name" : "NINA WILSON",
    "image" : "https://www.ninawilsonhomes.com/images/nina-wilson-realtor-corpus-christi-texas-area-icon.jpg",
    "telephone" : "361.596.NINA",
    "email" : "ninawilsonhomes@gmail.com",
    "address" : {
      "@type" : "PostalAddress",
      "addressLocality" : "Corpus Christi",
      "addressRegion" : "TX",
      "addressCountry" : "USA",
      "postalCode" : "78480"
    },
    "review" : {
      "@type" : "Review",
      "author" : {
        "@type" : "Person",
        "name" : "Lucinda Trevino"
      },
      "datePublished" : "2017-06-11",
      "reviewRating" : {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      },
      "reviewBody" : "&quot;Nina was simply amazing. She reached out to me to see if i was ready to start the search. I was ready. I prepped for this and she knows her industry better than i could have imagined. She was very knowledgeable and friendly. She was attentive and heard what i wanted in a home. She knows alot of the do&#39;s and don&#39;t of the business. She ultimately helped me find a beautiful home exactly in the price range i needed. She had or search for answers to questions I had. She has amazing negotiations skills. She went above and beyond for me. THANK YOU NINA.&quot;"
    }
  }, {
    "@context" : "http://schema.org",
    "@type" : "LocalBusiness",
    "priceRange": "$$$$$$",
    "name" : "NINA WILSON",
    "image" : "https://www.ninawilsonhomes.com/images/nina-wilson-realtor-corpus-christi-texas-area-icon.jpg",
    "telephone" : "361.596.NINA",
    "email" : "ninawilsonhomes@gmail.com",
    "address" : {
      "@type" : "PostalAddress",
      "addressLocality" : "Corpus Christi",
      "addressRegion" : "TX",
      "addressCountry" : "USA",
      "postalCode" : "78480"
    },
    "review" : {
      "@type" : "Review",
      "author" : {
        "@type" : "Person",
        "name" : "Jesus Hernandez"
      },
      "datePublished" : "2017-05-20",
      "reviewRating" : {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      },
      "reviewBody" : "&quot;Great Person! Nina has been an awesome person to our family. She take pride in what she does and leaves no stone unturned when it comes to business. She is a true blessing and a humble person. Her skills at the negotiating table are immaculate and flawless. Thanks Nina for being a blessing to our family. You rock. &quot;"
    }
  }, {
    "@context" : "http://schema.org",
    "@type" : "LocalBusiness",
    "priceRange": "$$$$$$",
    "name" : "NINA WILSON",
    "image" : "https://www.ninawilsonhomes.com/images/nina-wilson-realtor-corpus-christi-texas-area-icon.jpg",
    "telephone" : "361.596.NINA",
    "email" : "ninawilsonhomes@gmail.com",
    "address" : {
      "@type" : "PostalAddress",
      "addressLocality" : "Corpus Christi",
      "addressRegion" : "TX",
      "addressCountry" : "USA",
      "postalCode" : "78480"
    },
    "review" : {
      "@type" : "Review",
      "author" : {
        "@type" : "Person",
        "name" : "Jacob Sanchez"
      },
      "datePublished" : "2017-03-10",
      "reviewRating" : {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "1"
      },
      "reviewBody" : "&quot;Nina was very helpful and informative every step of the way. She had answers for every question we had. And if she didn&#39;t know the answer she would find it usually with a few hours.&quot;"
    }
  } ]
  </script>
    <script type="text/javascript" src="index.js"></script>
    <script type="text/javascript" src="../js/contact-form.js"></script>
    <script type="text/javascript"src="../js/swiper.js"></script>

  </body>
</html>
