<!-- Footer -->
<div class="container-fluid footer" id="footer">
    <!-- Footer Wrap -->
    <div class="row wrap">

      <!-- col-sm-4 -->
      <div class="col-sm-4">
        <!-- style -->
        <div class="style">
          <h4><a href="tel:+1-361-596-6462" style="color:#FFF;">CONTACT NINA WILSON</a></h4>
          <!-- contact-text -->
          <div class="contact-text">
            <a href="tel:+1-361-596-6462"><img class="img-responsive" style="border-radius:5px; margin-bottom:15px;"src="../images/nina-wilson-realtor-corpus-christi-texas-area-icon.jpg" alt="Nina Wilson a realtor in Corpus Christi, Texas Area."></a>

            <strong><i class="fa fa-phone" aria-hidden="true"></i></strong> <a href="tel:+1-361-596-6462">361.596.NINA</a><br>

            <strong><i class="fa fa-envelope" aria-hidden="true"></i></strong> <a href="mailto:ninawilsonhomes@gmail.com" target="_top">ninawilsonhomes@gmail.com</a><br><br>

            <strong><img src="../images/promise-land-properties-corpus-christi-texas-logo.jpg" alt="Promise Land Properites logo in Corpus Christi, Texas." class="img-responsive"></strong>PO Box 181474 Corpus Christi, TX. 78480 USA<br><br>

            <strong>TREC License #</strong> 0542355<br>

            <strong><a href="../documents/Information-About-Brokerage-Services.pdf">INFORMATION ABOUT BROKERAGE SERVICES</a></strong><br>

            <strong><a href="../documents/Trec-Consumer-Protection.pdf">TREC CONSUMER PROTECTION PAGE</a></strong>

          </div>
          <!-- /contact-text -->
        </div>
        <!-- /style -->
      </div>
      <!-- /col-sm-4 -->

      <!-- col-sm-4 -->
      <div class="col-sm-4">
        <!-- style -->
        <div class="style">
          <h4>FEATURED LISTINGS</h4>
          <!-- Swiper -->
          <div class="swiper-container swiper-container-two" id="">
            <!-- Swiper-wrapper -->
              <div class="swiper-wrapper">

                  <div class="swiper-slide swiper-slide-two" id="img-two-1">
                    <div class="text-two">
                        <h2>Coming Soon, Corpus Christi 78418</h2>
                        <h3>2,300 Sqfr - 3 Bed - 2 Bath</h3>
                        <button type="button" name="button">MORE INFO</button>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-two" id="img-two-2">
                    <div class="text-two">
                      <h2>Coming Soon, Corpus Christi 78417</h2>
                      <h3>2,300 Sqfr - 3 Bed - 2 Bath</h3>
                      <button type="button" name="button">MORE INFO</button>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-two" id="img-two-3">
                    <div class="text-two">
                      <h2>Coming Soon, Corpus Christi 78405</h2>
                      <h3>2,300 Sqfr - 3 Bed - 2 Bath</h3>
                      <button type="button" name="button">MORE INFO</button>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-two" id="img-two-4">
                    <div class="text-two">
                      <h2>Coming Soon, Corpus Christi 78480</h2>
                      <h3>2,300 Sqfr - 3 Bed - 2 Bath</h3>
                      <button type="button" name="button">MORE INFO</button>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-two" id="img-two-5">
                    <div class="text-two">
                      <h2>Coming Soon, Corpus Christi 78415</h2>
                      <h3>2,300 Sqfr - 3 Bed - 2 Bath</h3>
                      <button type="button" name="button">MORE INFO</button>
                    </div>
                  </div>

                  <div class="swiper-slide swiper-slide-two" id="img-two-6">
                    <div class="text-two">
                      <h2>Coming Soon, Corpus Christi 78411</h2>
                      <h3>2,300 Sqfr - 3 Bed - 2 Bath</h3>
                      <button type="button" name="button">MORE INFO</button>
                    </div>
                  </div>


              </div>
              <!-- /Swiper-wrapper -->

              <!-- Add Pagination -->
              <div class="swiper-pagination swiper-pagination-two"></div>
              <!-- /Add Pagination -->

              <!-- Add Arrows -->
              <div class="swiper-button-next swiper-button-white swiper-button-next-two"></div>
              <div class="swiper-button-prev swiper-button-white swiper-button-prev-two"></div>
              <!-- /Add Arrows -->
          </div>
          <!-- /Swiper -->
        </div>
        <!-- /style -->
      </div>
      <!-- /col-sm-4 -->


      <!-- Testimonials -->
      <div class="col-sm-4 tesimonials-col">
        <!-- Testimonials Style -->
        <div class="style tesimonials-style">
          <h4>CLIENT REVIEWS</h4>

          <?php
            $sql = "SELECT firstname, lastname, comments, buyerorseller, date, rating FROM `testimonials` ORDER BY date DESC LIMIT 3";
            $result = mysqli_query($dbconnect, $sql);
          ?>

          <!-- your-class -->
          <div class="your-class">

          <?php ### BEGIN WHILE LOOOP

              while ($row = mysqli_fetch_array($result)) {?>
                <!-- div slide -->
                <div>
                  <!-- blockquote-footer -->
                  <div id="blockquote-footer">

                    <i class="fa fa-quote-left fa-2x pull-left tt_quote_transparency"></i><p><?php echo substr($row['comments'], 0, 255); ?>(...)</p>
                    <a href="../testimonials/index.php">Read More...</a>

                    <!-- author -->
                    <div class="author">
                      <div><?php echo $row['firstname']. " " . $row['lastname']; ?></div>
                      <div>
                        <cite title="Source Title"><?php echo $row['buyerorseller']; ?> in Corpus Christi</cite>
                      </div>
                      <?php
                      echo "Review Date: ". $row['date']. "<br>";
                       $stars = $row['rating'];
                       switch ($stars) {
                          case "1":

                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                            echo " 1/5";
                              break;
                          case "2":

                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                            echo " 2/5";
                              break;
                          case "3":

                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                            echo " 3/5";
                              break;
                          case "4":

                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star-o' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                            echo " 4/5";
                              break;
                          case "5":

                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                              echo "<i class='fa fa-star' aria-hidden='true' style='color: rgb(238, 220, 56);'></i>";
                            echo " 5/5";
                              break;
                          default;
                              echo "";
                          break;
                      }
                      ?>
                    </div>
                    <!-- /author -->

                  </div>
                  <!-- /blockquote-footer -->
                </div>
                <!-- /div slide -->
            <?php } ### END WHILE LOOOP ?>

          </div>
          <!-- /your-class -->

          <!-- Contact Modal Toggle -->
          <div class="contact-modal-icon" data-toggle="modal" data-target=".contact-modal">
          	<a href="#">
          		<i class="fa fa-envelope fa-envelope-23" aria-hidden="true">
          			<span> Get In Touch</span>
          		</i>
          	</a>
          </div>
          <!-- /Contact Modal Toggle -->
          <!-- Contact Modal -->
          <div class="modal fade contact-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="contactModalTitle">Get In Touch</h4>
                </div>

                <!-- modal-body -->
                <div class="modal-body">
                  <form id="contactForm" action="#" method="post">

          					<!-- row firstname-->
          					<div class="row">
          						<div class="col-xs-12">
          							<div class="form-group what cities">
          								<input type="text" class="form-control light-gray" id="firstname" placeholder="* First Name" name="firstname" required>
          							</div>
          						</div>
          					</div>
          					<!-- /row firstname-->

          					<!-- row lastname-->
          					<div class="row">
          						<!-- col-xs-12 -->
          							<div class="col-xs-12">
          									<div class="form-group name">
          										<input type="text" class="form-control light-gray" id="lastname" placeholder="* Last Name" name="lastname" required>
          									</div>
          							</div>
          							<!-- /col-xs-12 -->
          					</div>
          					<!-- /row lastname-->

                    <!-- row email-->
                    <div class="row">
                      <!-- col-xs-12 -->
                        <div class="col-xs-12">
                            <div class="form-group name">

                              <input type="email" class="form-control light-gray" id="email" placeholder="* Email" name="email" required>
                            </div>
                        </div>
                        <!-- /col-xs-12 -->
                    </div>
                    <!-- /row email-->

          					<!-- row phone-->
          					<div class="row">
          						<div class="col-xs-12">
          							<div class="form-group what cities">
          								<input type="text" class="form-control light-gray" id="phone" placeholder="Phone Number" name="phone">
          							</div>
          						</div>
          					</div>
          					<!-- /row phone-->

                    <!-- row -->
                    <div class="row">
                      <!-- col-xs-12 -->
                      <div class="col-xs-12">
                        <div class="form-group what-cities" id="comments">

                          <textarea  class="form-control light-gray" id="content" placeholder="* Any questions for us?" name="content" rows="5" required></textarea>
                        </div>
                      </div>
                      <!-- /col-xs-12 -->
                    </div>
          					<p style=" font-size: 13px; border-radius: 2px; padding: 5px 10px; color: #969696; background-color: rgba(34, 34, 34, .9);">Information collected will be used to personalize your experience and improve our website. Your information will be kept confidential and will not be shared with any third party or entity.</p>
                    <!-- /row -->
          			<div style="text-align:right;">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="close-contact-modal-button" style="margin-right:8px;">Close</button><input type="submit" class="btn btn-default" id="submit-contact-modal-button" name="submit_1" value="Submit">
                        </div>
                    </form>
                </div>
                <!-- /modal-body -->


              </div>
            </div>
          </div>
          <!-- Contact Modal -->
          <!-- Stay connected -->
          <div class="stay-connected-col">
            <div class="style">
              <ul class="ul">
                <li><a href="https://twitter.com/promiselandprop" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://www.facebook.com/PromiseLandProperties/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://plus.google.com/u/0/115511114787785267829" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/PromiseLandProperties/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.pinterest.com/PromiseLandProperties/" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              </ul>
            </div>

          </div>
          <!-- Stay connected -->

        </div>
        <!-- /Testimonials Style -->


        <!-- <div style="margin-top: 10px;">
            <a href="http://www.trulia.com/profile/nina-wilson-agent-corpus-christi-tx-31569982/reviews"><img class="img-responsive" src="https://static.trulia-cdn.com/images/dossier/5_STAR_Agent_Badge_300ppi_Dark_Btn.png" alt="Nina Wilson - Agent with Promise Land Properties" style="border-radius: 15px;"/></a>
          </div> -->

      </div>
      <!-- /Testimonials -->


    </div>
    <!-- /Footer Wrap -->
</div>
<!-- /Footer -->

<!-- Footer-footer -->
<div class="container-fluid container-fluid-footer">
  <div class="row" id="footer-footer">
    <div class="col-sm-12">
      <div class="footer-footer">
        <h2>© COPYRIGHT 2017 https://www.ninawilsonhomes.com</h2>
        <div class="mls-logos" style="padding-bottom: 10px; opacity: .6;">
          <img src="../images/mls.png" alt="mls logos">
        </div>
        DESIGN BY <a href="https://fullstack.city" class="jesushilarioh">Full Stack Solutions</a>
      </div>
    </div>
  </div>

</div>
<!-- /Footer-footer -->

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Person",
  "address": {
    "@type": "PostalAddress",
      "addressCountry": "United States",
      "addressLocality": "Corpus Christi",
      "addressRegion": "TX",
      "name": "Promise Land Properties",
      "postOfficeBoxNumber": "181474",
      "postalCode": "78480"
  },
  "colleague": [
    "https://www.guildmortgage.com/get-started/officer/?officer=amandapatterson"
  ],
  "email": "mailto:ninawilsonhomes@gmail.com",
  "image": "../images/nina-wilson-realtor-corpus-christi-texas-area-icon.jpg",
  "jobTitle": "Realtor",
  "name": "Nina Wilson",
  "telephone": "(361) 596-6462",
  "url": "https://www.ninawilsonhomes.com",
  "sameAs": [
    "https://twitter.com/promiselandprop",
    "https://www.facebook.com/PromiseLandProperties/",
    "https://plus.google.com/u/0/115511114787785267829",
    "https://www.instagram.com/PromiseLandProperties/",
    "https://www.pinterest.com/PromiseLandProperties/"
  ]
}
</script>
