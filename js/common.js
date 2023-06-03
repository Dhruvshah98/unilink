/*================================= Sticky Header Starts =================================*/

$('#header').load('header.html', function () {


    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('.header-container').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('#header').css("top", -navbarHeight);
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('#header').css("top", 0);

            }
        }

        lastScrollTop = st;
    }


});

$('#footer').load('footer.html');




// window.scrollTo(0, 0);
// $('window').scrollTop(0);