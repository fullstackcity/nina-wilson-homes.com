$(document).ready(function () {
  
      // Stop form from submitting
      $("#sellYourHomeForm").submit(function(e) {

          let error = "";

          if ($("#emailSellForm").val() == "") {
              error += "The email field is required.<br/>"
          }

          if ($("#firstNameSellForm").val() == "") {
              error += "Your first name is required.<br/>"
          }

          if ($("#lastNameSellForm").val() == "") {
              error += "Your last name is required."
          }

          if (error !== "") {
              $("#errorSellForm").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>Error. Your message was NOT sent.</strong><br>' + error + '</div>')

          /*
           * Use the return false or return true
           * instead of using the .unbind (.off) and
           * .submit (.on) method
          */

              return false; // Something has gone wrong... DO NOT submit the form.

          } else {
              return true; // Things have gone right...PLEASE DO submit the form.
          }

      });

  });
