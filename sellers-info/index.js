$(document).ready(function () {

    // Toggle Between Buttons
    $(".action").click(function () {

        var $this = $(this);

        var target = $this.data('content');
        $('.action').not($this).each(function () {
            var $other = $(this);
            var otherTarget = $other.data('content');
            $(otherTarget).hide();

        });
        // $($this.find('span')).addClass('active');
        $(target).show("slow");
    });

    $('.buy-rent-sold-spans').click(function () { /* ...bind click event to .boxSet elements */
        $('.buy-rent-sold-spans').removeClass('active'); /* On click, remove any 'hilite' class */
        $(this).addClass('active'); /* ...and add 'hilite' class to clicked element */
    });

    // Toggle Between Rent and Buy Forms
    $(".action1").click(function () {

        var $this = $(this);

        var target = $this.data('content');
        $('.action1').not($this).each(function () {
            var $other = $(this);
            var otherTarget = $other.data('content');
            $(otherTarget).hide();

        });
        // $($this.find('span')).addClass('active');
        $(target).show("slow");
    });

    $('.buy-rent-sold-spans1').click(function () { /* ...bind click event to .boxSet elements */
        $('.buy-rent-sold-spans1').removeClass('active1'); /* On click, remove any 'hilite' class */
        $(this).addClass('active1'); /* ...and add 'hilite' class to clicked element */
    });


});
