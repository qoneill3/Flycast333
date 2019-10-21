jQuery(document).ready(function($){

  new WOW().init();

  $(document).ready(function(){
    $('.scroll-bar').delay(500).addClass('grow');
  });

  $(".river-gallery-wrap").slick({
    centerMode: true,
        centerPadding: '100px',
        slidesToShow: 3,
        arrows: true,
        // dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
      });

  // Slick Wrap
  $(".slick-gallery-wrap").slick({
      centerMode: true,
        centerPadding: '100px',
        slidesToShow: 3,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 3
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
    });

  $(".report-display").slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     fade: true,
     // asNavFor: '.flycast-reports',
     centerMode: true,
      centerPadding: '200px',
      infinite: true,
      draggable: false
  });

  $('.flycast-reports').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     asNavFor: '.report-display',
     focusOnSelect: true,
     infinite: true
   });

  $('.testimonials-slick').slick({
    slidesToShow: 1,
     slidesToScroll: 1,
     arrows: true,
     fade: true,
     // asNavFor: '.flycast-reports',
     centerMode: true,
      centerPadding: '200px',
      infinite: true,
      autoplay: true,
  autoplaySpeed: 4000
    });


  // animation toggles
    window.setTimeout(function(){$(".delay-show").fadeIn(800);}, 200);
    // $(".delay-show").fadeIn("slow");

    $(window).scroll(function() {
      // $(".title, .subtitle").css("opacity", 1 - $(window).scrollTop() / 250);

      var winTop = $(window).scrollTop();

      $(".slideanim").each(function(){
        var pos = $(this).offset().top;
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
      });
      $(".slideanim2").each(function(){
        var pos = $(this).offset().top;
        if (pos < winTop + 600) {
          $(this).addClass("slidedelayed");
        }
      });
      $(".slideup, .slideup2, .slideup3").each(function(){
        var pos = $(this).offset().top;
        if (pos < winTop + 600) {
          $(this).addClass("fadeup");
        }
      });

      $(".zoom").css({
      transform: 'translate3d(0%, -'+(winTop/500)+'%, 0) scale('+(100 + winTop/30)/100+')'
      });
    });



    // // wrap center aligned images in a figure
    // $('img.aligncenter').wrap('<figure class="centered-image" />');
    // $('figure.wp-caption.aligncenter').removeAttr('style');
    // $('figure.wp-caption.aligncenter').addClass('centered-image');
    // var centFig= $('figure.centered-image');
    // if(centFig.parent().is("p")){
    //   centFig.unwrap();
    // }
    // $('figure.centered-image img').wrap('<div class="cent-img-wrap" />');



    // parallax
    if ($(window).width() > 767) {
      $(".slower").paroller({
          factor: '-0.1',
          type: 'foreground',
          direction: 'vertical'
      });
      $(".faster").paroller({
          factor: '0.2',
          type: 'foreground',
          direction: 'vertical'
      });
    }

});