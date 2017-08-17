$(document).ready(function () {

    //initialize swiper when document ready
    var mySwiper = new Swiper ('.swiper-container-one', {
      // Optional parameters
      pagination: '.swiper-pagination-one',
      nextButton: '.swiper-button-next-one',
      prevButton: '.swiper-button-prev-one',
      slidesPerView: 1,
      paginationClickable: true,
      spaceBetween: 30,
      loop: true,
      centeredSlides: true,
      speed: 700,
      effect: 'fade'
    });

    // Find A Home Search Bar Toggle

    // $("div.action").click (function(){
    //
    //         var $this = $(this);
    //
    //         var target = $this.data('content');
    //         $('div.action').not($this).each(function(){
    //             var $other = $(this);
    //             var otherTarget = $other.data('content');
    //            $(otherTarget).hide();
    //
    //         });
    //         // $($this.find('span')).addClass('active');
    //         $(target).show();
    //     });

    // $('.buy-rent-sold-spans').click(function(){  /* ...bind click event to .boxSet elements */
    //   $('.buy-rent-sold-spans').removeClass('active'); /* On click, remove any 'hilite' class */
    //   $(this).addClass('active'); /* ...and add 'hilite' class to clicked element */
    // });


   // Stop form from submitting
       $("#contactForm").submit(function(e) {

           let error = "";

           if ($("#email").val() == "") {
               error += "The email field is required.<br/>"
           }

           if ($("#subject").val() == "") {
               error += "The subject field is required.<br/>"
           }

           if ($("#content").val() == "") {
               error += "The content field is required."
           }

           if (error !== "") {
               $("#error").html('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color: black;"><span aria-hidden="true" style="color: black;">&times;</span></button><strong>Oops!</strong><br>' + error + '</div>')

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
