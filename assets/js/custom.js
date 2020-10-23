$(document).ready(function () {
    // Team Slider
    $('.the-buzz-section .owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        autoplay: false,
        dots: true,
        navText: ["<img src='http://localhost/the-hook/wp-content/uploads/2020/10/left-arrow.png'>", "<img src='http://localhost/the-hook/wp-content/uploads/2020/10/right-arrow.png'>"],
        responsive: {
            0: {
                items: 1
            }
        }
    });
    
    $(".logo a,.cus-navigation nav ul li a").on('click', function (event) {
        var header_height = $('header').innerHeight()
        console.log(header_height);

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - header_height
            }, 800, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                // window.location.hash = hash;
            });
        } // End if
    });
    $(".logo a,.cus-navigation nav ul li").on("click", function (e) {
        $(".logo a, li").removeClass("active");
        $(this).addClass("active");
    });
    $(".menu-bar").click(function () {
        $(".cus-navigation").slideToggle();
    });
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        //>=, not <=
        if (scroll >= 10) {
            //clearHeader, not clearheader - caps H
            $("header").addClass("stickyheader");
        }
        else {
            $("header").removeClass("stickyheader");
        }
    }); //missing );
});



