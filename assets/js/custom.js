$(document).ready(function () {
    // Team Slider
    $('.the-buzz-section .owl-carousel').owlCarousel({
        loop: false,
        margin: 20,
        nav: true,
        autoplay: false,
        dots: true,
        navText: ["<img src='assets/images/left-arrow.png'>", "<img src='assets/images/right-arrow.png'>"],
        responsive: {
            0: {
                items: 1
            }
        }
    });
    // $(".logo a,.cus-navigation nav ul li a").on('click', function (event) {
    //     var header_height = $('header').innerHeight()
    //     console.log(header_height);

    //     // Make sure this.hash has a value before overriding default behavior
    //     if (this.hash !== "") {
    //         // Prevent default anchor click behavior
    //         event.preventDefault();

    //         // Store hash
    //         var hash = this.hash;
    //         $('html, body').animate({
    //             scrollTop: $(hash).offset().top - header_height
    //         }, 800, function () {

    //             // Add hash (#) to URL when done scrolling (default click behavior)
    //             // window.location.hash = hash;
    //         });
    //     } // End if
    // });
    // $(".logo a,.cus-navigation nav ul li").on("click", function (e) {
    //     $(".logo a, li").removeClass("active");
    //     $(this).addClass("active");
    // });
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
    // Cache selectors
    var topMenu = $(".cus-navigation nav ul li"),
        topMenuHeight = topMenu.outerHeight() + 40,
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) { return item; }
        });

    // Bind to scroll
    $(window).scroll(function () {
        // Get container scroll position
        var fromTop = $(this).scrollTop() + topMenuHeight;

        // Get id of current scroll item
        var cur = scrollItems.map(function () {
            if ($(this).offset().top < fromTop)
                return this;
        });
        // Get the id of the current element
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : "";
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[href='#" + id + "']").parent().addClass("active");
    })
});



