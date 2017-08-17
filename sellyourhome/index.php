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
          <h1>Free Home Valuation</h1>
          <p><i class="fa fa-home" aria-hidden="true"></i><a href="../index.php"> Home</a>  /  Free Home Valuation</p>
        </div>
      </div>
    </div>
    <!-- Bio header image container -->

    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->

    <div class="sell-your-home-section">
      <div class="container main-paragraph">
        <div id="errorSellForm"><?php echo $errorMainForm.$successMessageMainForm; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
        <div id="error"><?php echo $error.$successMessage; ?></div> <!-- one or the other will be displayed. However, not both a once. -->
          <div class="row">
              <div class="row-style">
                  <div class="col-md-12">
                      <p id="top-paragraph">The single most source for an estimated market value for your home is a REALTOR®. Contact Nina Wilson for a detailed evalutation of your property.</p>

                      <form class="main-form" id="sellYourHomeForm" method="post">

                        <!-- property-info div -->
                        <div class="property-info">
                            <label id="what-cities-title">Contact Information</label>
                            <p id="what-cities-para">Provide the following information so I can contact you with properties matching your description.</p>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group name">
                                      <label for="firstNameSellFom">First Name <span>*</span></label>
                                      <input type="text" class="form-control light-gray-main" id="firstNameSellFom" name="first-name">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group name">
                                      <label for="lastNameSellFom">Last Name <span>*</span></label>
                                      <input type="text" class="light-gray-main form-control" id="lastNameSellFom" name="last-name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group name">
                                      <label for="emailSellForm">Email <span>*</span></label>
                                      <input type="email" class="light-gray-main form-control" id="emailSellForm" name="email">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group name">
                                      <label for="phoneNumberSellForm">Phone</label>
                                      <input type="tel" class="light-gray-main form-control" id="phoneNumberSellForm" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="form-group what-cities" id="comments">
                                  <label id="what-cities-title" for="commentsSellForm">Comments</label>
                                  <textarea rows="5" type="email" class="form-control light-gray-main" id="commentsSellForm" name="comments"></textarea>
                                </div>
                              </div>
                            </div>

                        </div>
                        <!-- /property-info div -->
                        <!-- contact-info div -->
                        <div class="contact-info">
                            <label id="what-cities-title">Property Information (optional)</label>
                            <p id="what-cities-para">Provide the following information so I can contact you with property values matching your description.</p>
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="form-group name">
                                      <label for="addressSellForm">Address</label>
                                      <input type="text" class="form-control light-gray-main" id="addressSellForm" name="address">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="aptNumberSellForm">Unit/Apt No</label>
                                      <input type="text" class="light-gray-main form-control" id="aptNumberSellForm" name="unit-apt">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="citySellForm">City</label>
                                      <input type="text" class="light-gray-main form-control" id="citySellForm" name="city">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="stateSellForm">State</label>
                                      <input type="text" class="light-gray-main form-control" id="stateSellForm" name="state">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="zipcodeSellForm">Zip Code</label>
                                      <input type="text" class="light-gray-main form-control" id="zipcodeSellForm" name="zipcode">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group name">
                                      <label for="houseSizeSellForm">House Size (Sq Ft)</label>
                                      <input type="text" class="light-gray-main form-control" id="houseSizeSellForm" name="house-size">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group name">
                                      <label for="lotSizeSellForm">Lot Size (Sq Ft)</label>
                                      <input type="text" class="light-gray-main form-control" id="lotSizeSellForm" name="lot-size">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="form-group name">
                                      <label for="subDivisionSellForm">Subdivision</label>
                                      <input type="text" class="light-gray-main form-control" id="subDivisionSellForm" name="subdivision">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="yearBuiltSelForm">Year Built</label>
                                      <input type="text" class="light-gray-main form-control" id="yearBuiltSelForm" name="year-built">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="propertyTypeSellForm">Property Type</label>
                                      <input type="text" class="light-gray-main form-control" id="propertyTypeSellForm" name="property-type">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="bedroomsSellForm">Bedrooms</label>
                                      <input type="text" class="light-gray-main form-control" id="bedroomsSellForm" name="bedrooms">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="bathroomsSellForm">Bathrooms</label>
                                      <input type="text" class="light-gray-main form-control" id="bathroomsSellForm" name="bathrooms">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="garageSellForm">Garages</label>
                                      <input type="text" class="light-gray-main form-control" id="garageSellForm" name="garages">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="storiesSellForm">Stories</label>
                                      <input type="text" class="light-gray-main form-control" id="storiesSellForm" name="stories">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group name">
                                      <label for="poolSellForm">Pool</label>
                                      <input type="text" class="light-gray-main form-control" id="poolSellForm" name="pool">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /contact-info div -->




                        <p id="bottom-paragraph">*Your name, email address and phone number are required. By submitting this form with your telephone number you are consenting to be contacted even if your name is on the Federal "Do-not-call List."</p>

                        <input style="font-weight:bold; font-size:25px; border-radius:3px;" type="submit" class="btn btn-default main-submit-button pull-right" name="submit_2" value="GET MY FREE VALUATION">
                      </form>


                  </div>

              </div>

          </div>
      </div>
    </div>

    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->
    <!-- NEW CODE GOES HERE! -->

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
