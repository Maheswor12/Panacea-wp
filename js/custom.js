jQuery(document).ready(function($){


    $(window).load(function() {
        // Animate loader off screen
        $(".container-load").fadeOut("slow");;
    });

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }
    
	$(window).scroll(function(){
      var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".header").addClass("sticked");
        }
        else{
            $(".header").removeClass("sticked");   
        }
    });


	var slider = $('#imageGallery').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        loop:true,
        controls: false,
        slideEndAnimation: true,
        pager: false
    });

    $("#lightgallery").lightGallery({
		selector:'.item'
	});

	$('#lightSlider').lightSlider({
        adaptiveHeight:true,
        item:3,
        slideMargin:0,
        loop:true,
        controls: false,
        pager: false
    }); 

    $('#test-slider').lightSlider({
        item:1,
        loop: true
    }); 


     $('.cont .prev').click(function() {
            slider.goToPrevSlide();
        });

        $('.cont .next').click(function() {
            slider.goToNextSlide();
        });

        $(".uper").click(function(){
            $(".flatinfo").css("bottom","0");
          });

});
