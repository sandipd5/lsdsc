//slick slider 
    $('.team-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,

      responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 800) {
    $('.top').fadeIn();
  } else {
    $('.top').fadeOut();
  }
});
$('.top').on('click', function (e) {
  e.preventDefault();
  $('html,body').animate({
    scrollTop: 0
  }, 700);
});

$(document).ready(function(){

 $('.carouselfade').carousel({
  interval: 2400
})
});

$(document).ready(function(){
  $('.projects__content.slider').owlCarousel({
    loop:false,
    margin:30,
    nav:true,
    dots:false,
    responsive:{
      0:{
        items:1
      },
      768:{
        items:3
      }
    }
  })

  $('body').flipLightBox({

    lightbox_text_status: 0,
    lightbox_navigation_status: 0

  })

    // paralexing effect start
    $(document).scroll(function() {
        // parallaxing
        var $movebg1 = $(window).scrollTop() * 0.3;
        $('.donate-block').css('background-positionY', ($movebg1) + 'px');

        var $movebg2 = $(window).scrollTop() * 0.3;
        $('#contact, .events_image').css('background-positionY', ($movebg2) + 'px');
      });
    

    var p = $(".popup__overlay");

    $("#popup__toggle").click(function() {
      p.css("display", "block");
    });
    p.click(function(event) {
      e = event || window.event;
      if (e.target == this) {
        $(p).css("display", "none");
      }
    });
    $(".popup__close").click(function() {
      p.css("display", "none");
    });

//video popup
function toggleVideo(state) {
  // if state == 'hide', hide. Else: show video
  var div = document.getElementById("popupVid");
  var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
  //div.style.display = state == 'hide' ? 'none' : '';
  func = state == "hide" ? "pauseVideo" : "playVideo";
  iframe.postMessage(
    '{"event":"command","func":"' + func + '","args":""}',
    "*"
    );
}

$("#popup__toggle").click(function() {
  p.css("visibility", "visible").css("opacity", "1");
});

p.click(function(event) {
  e = event || window.event;
  if (e.target == this) {
    $(p)
    .css("visibility", "hidden")
    .css("opacity", "0");
    toggleVideo("hide");
  }
});

$(".popup__close").click(function() {
  p.css("visibility", "hidden").css("opacity", "0");
  toggleVideo("hide");
});

});

$(".js-modal-btn").modalVideo();