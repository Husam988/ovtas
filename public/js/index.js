

  $(document).ready(function() {

    $('.toggle').on('click', function() {
        $('.navbar-menu').addClass('active-menu');
    });

    $('.fa-times').on('click', function() {
        $('.navbar-menu').removeClass('active-menu');
    });


    $('.toggle').on('click', function() {
        $('.menu-btn, .search-btnn, .carousel-caption, .form-fields').addClass('none');
    });

    $('.fa-times').on('click', function() {
        $('.menu-btn, .search-btnn, .carousel-caption, .form-fields').removeClass('none');
    });
     });



    $(document).ready(function() {
        $(".menu-btn").click(function() {
            //  $("div#overlay").fadeIn('500');
            //  $("div#popup").delay('800');
            //  $("div#popup").fadeIn('500');
            $('body').css('overflow', 'hidden'); //ADD THIS
        });

        $(document).on('click', '.fa-times', function() {
            //  $("div#popup").fadeOut('500');
            //  $("div#overlay").delay('500');
            //  $("div#overlay").fadeOut('500');
            $('body').css('overflow', 'auto'); //ADD THIS
        });
    });




    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });




