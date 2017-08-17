<?php
    require_once('../database-connection/index.php');

  	$msg = "";
  	$errorMessageReview = ""; $successMessageReview = "";
	// if upload button is pressed
	if(isset($_POST['submit_review']) && !empty($_POST['submit_review'])) {

      if (!$_POST['firstname']) {
        $errorMessageReview .= "A first name is required.<br>";
      }
      if (!$_POST['lastname']) {
        $errorMessageReview .= "A last name is required.<br>";
      }
      if (!$_POST['buyerorseller']) {
        $errorMessageReview .= "A relationship is required.<br>";
      }
      if (!$_POST['comments']) {
        $errorMessageReview .= "A review description is required.<br>";
      }
      if (!$_POST['date']) {
        $errorMessageReview .= "A date must be provided.<br>";
      }
      if (!$_POST['rating']) {
        $errorMessageReview .= "A star rating is required.<br>";
      }
      if ($errorMessageReview != "") {
        $errorMessageReview = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>Error!</strong><br>' . $errorMessageReview . '</div>';

      } else {

          // the path to store the uploaded image
          $target = "images/".basename($_FILES['image']['name']);

          // Get all the submitted data from the form
          $image = mysqli_real_escape_string($dbconnect, $_FILES['image']['name']);
         $comments = mysqli_real_escape_string($dbconnect, $_POST['comments']);
          $firstname = mysqli_real_escape_string($dbconnect, $_POST['firstname']);
          $lastname = mysqli_real_escape_string($dbconnect, $_POST['lastname']);
          $buyerorseller = mysqli_real_escape_string($dbconnect, $_POST['buyerorseller']);
         	$date =	mysqli_real_escape_string($dbconnect, $_POST['date']);
          $rating = mysqli_real_escape_string($dbconnect, $_POST['rating']);

          $sql = "INSERT INTO `testimonials` (image, comments, firstname, lastname, buyerorseller, date, rating) VALUES ('$image', '$comments', '$firstname', '$lastname', '$buyerorseller', '$date', '$rating')";

         	if ($result = mysqli_query($dbconnect, $sql)) {
         	  echo "Data Inserted!";
         	} // Store the data into database table testimonials.

          // Upload image in to image folder:
          if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            	$msg = "Image uploaded successfully";

          } else {
              $msg = "There was a problem uploading image";

          }


          $emailTo = "ninawilsonhomes@gmail.com";

          $subject = "A Review Submitted! on Nina Wilson's Website.";

          $content =

          "<html>
              <body>
                <h1><strong style='color:rgb(82, 53, 115);'>". $_POST['firstname'] ." ". $_POST['lastname'] ."</strong> has just submitted a review on your website.</h1>
                <h2>Take some time to look over this review. Let Full Stack Solutions know if anything needs to be changed.</h2>
              	<br><br>
                <p>
                  <strong style='color:rgb(82, 53, 115);'>First Name: </strong>". $_POST['firstname']. "
                </p>
                <p>
                  <strong style='color:rgb(82, 53, 115);'>Last Name: </strong>". $_POST['lastname']. "
                </p>
                <p>
                  <strong style='color:rgb(82, 53, 115);'>Relationship: </strong>". $_POST['buyerorseller']. "
                </p>
                <p>
                  <strong style='color:rgb(82, 53, 115);'>Date: </strong>". $_POST['date']. "
                </p>
                <p>
                  <strong style='color:rgb(82, 53, 115);'>Comments: </strong>". $_POST['comments']. "
                </p>
                <p>
                  <strong style='color:rgb(82, 53, 115);'>Rating: </strong>". $_POST['rating']. "
                </p>

              </body>
            </html>";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: <" . "jesushilariohernandez@gmail.com" . ">" . "\r\n";

          if (mail($emailTo, $subject, $content, $headers)) {
            $successMessageReview = '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>Yes!</strong><br>Your review has been sent. It will be posted soon. Thanks.</div>';

          } else {
            $errorMessageReview = '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>We sorry</strong><br>Your review couldn\'t be sent - please try again later.</div>';

          }

      }

    }
?>
