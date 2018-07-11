var p = [];
var pa = [];

entry()

$(document).ready(function() {

  scaner ();

  if($('#svg-1').length > 0){snapChart();checkSnapChart();}
  if (screen && screen.width > 768) {verticalScroll();}


  events();
  smoothScroll();

function scaner (){

    $('.am-scaner-circle').drags();
  }

function verticalScroll() {

  $('#fullPage').fullpage({
    sectionSelector: '.vertical-scrolling',
    navigation: true,
    slidesNavigation: true,
    afterRender: function(){
        if($('#video').length > 0){$('#video')[0].play();}
    },
    controlArrows: false
});

  }

});

function entry() {

  window.onload = function () {
      $("body").addClass("am-play");
      if (screen && screen.width < 768) {$("body").addClass("active");}

    }

  }



function events(){

$('.am-manual-slider .am-manual-item').on('click', function () {
  $('.am-manual-slider .am-manual-item').removeClass('active');
  $(this).addClass('active');
  sliderChanger($(this));

})

$('.am-manual-slider-container .am-manual-slider-next').on('click', function () {

  var b = $('.am-manual-slider .am-manual-item.active');
  if(b.next().length > 0) {
    $('.am-manual-slider .am-manual-item.active').removeClass('active');
    b.next().addClass('active');
    sliderChanger(b.next());
  }
})

$('.am-manual-slider-container .am-manual-slider-prev').on('click', function () {

  var b = $('.am-manual-slider .am-manual-item.active');

  if(b.prev().length > 0) {
    $('.am-manual-slider .am-manual-item.active').removeClass('active');
    b.prev().addClass('active');
    sliderChanger(b.prev());
  }
})

$('.am-link').on('click', function () {

  var perc = $(this).data("perc").split(',');
  $('.am-link').removeClass('active');
  $(this).addClass('active');

  $(".am-charts-row").each(function( index ) {
    $(this).find(".am-charts-row-curr").css("width", perc[index]+"%");
  });


})

$('.am-scan-buttons a').on('click', function () {

  $('.am-scan-buttons a').removeClass("active");
  $('.am-scan-2, .am-scan-1').removeClass("crop").removeClass("fertilizer");;

  $(this).addClass("active");
  $('.am-scan-2, .am-scan-1').addClass($(this).data("active"));


})



}

function sliderChanger(el) {
  $('.am-manual-container [data-content]').each(function(){
    if($(this).data('content') != el.data('content')) {
      var el_src = $(this).find('iframe').attr("src");
      $(this).find('iframe').attr("src",el_src);
    }
  });

  $('.am-manual-container [data-content]').removeClass('active');
  $('.am-manual-container [data-content='+el.data('content')+']').addClass('active');

}

function checkSnapChart() {

  var curr = 0;

  setInterval(function() {
    curr++;
    if (curr<3){
    p[curr].animate({ d: "M0,25.4c31.2,0,64.6-3.7,89-25" }, 1000, mina.bounce);
    pa[curr].animate({ d: "M89.5,0.9c-24.4,21.3-57.8,25-89,25h89V0.9z" }, 1000, mina.bounce);
    p[curr-1].animate({ d: "M0.5,25.4c29.7,0,59.3,0,89,0" }, 1000, mina.bounce);
    pa[curr-1].animate({ d: "M89.5,25.9c-35,0-57.8,0-89,0H89.5L89.5,25.9z" }, 1000, mina.bounce);
    }else{
    curr = 0;
    p[curr].animate({ d: "M0,25.4c31.2,0,64.6-3.7,89-25" }, 1000, mina.bounce);
    pa[curr].animate({ d: "M89.5,0.9c-24.4,21.3-57.8,25-89,25h89V0.9z" }, 1000, mina.bounce);
    p[2].animate({ d: "M0.5,25.4c29.7,0,59.3,0,89,0" }, 1000, mina.bounce);
    pa[2].animate({ d: "M89.5,25.9c-35,0-57.8,0-89,0H89.5L89.5,25.9z" }, 1000, mina.bounce);
    }

    $('.am-charts-item').removeClass('active');
    $('*[data-path='+curr+']').addClass('active');
  }, 5000);

}

function snapChart() {
  var s = Snap("#svg-1");
  var s2 = Snap("#svg-2");
  var s3 = Snap("#svg-3");

  p[0] = s.path("M0.5,25.4c29.7,0,59.3,0,89,0");
  pa[0] = s.path("M89.5,25.9c-35,0-57.8,0-89,0H89.5L89.5,25.9z");

  p[1] = s2.path("M0.5,25.4c29.7,0,59.3,0,89,0");
  pa[1] = s2.path("M89.5,25.9c-35,0-57.8,0-89,0H89.5L89.5,25.9z");

  p[2] = s3.path("M0.5,25.4c29.7,0,59.3,0,89,0");
  pa[2] = s3.path("M89.5,25.9c-35,0-57.8,0-89,0H89.5L89.5,25.9z");

  p[0].attr({fill:"#ffffff",fillOpacity:"0",stroke:"#49b04b",strokeMiterlimit:10});
  pa[0].attr({fill:"#dcf6d6"});

  p[1].attr({fill:"#ffffff",fillOpacity:"0",stroke:"#49b04b",strokeMiterlimit:10});
  pa[1].attr({fill:"#dcf6d6"});

  p[2].attr({fill:"#ffffff",fillOpacity:"0",stroke:"#49b04b",strokeMiterlimit:10});
  pa[2].attr({fill:"#dcf6d6"});

  p[0].animate({ d: "M0,25.4c31.2,0,64.6-3.7,89-25" }, 1000, mina.bounce);
  pa[0].animate({ d: "M89.5,0.9c-24.4,21.3-57.8,25-89,25h89V0.9z" }, 1000, mina.bounce);

}

function smoothScroll() {
  /*-- Smoth-Scroll --*/
  $('#beta_tester').click(function (event) {
      // On-page links
      if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
          location.hostname == this.hostname
      ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top
              }, 1000, function () {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                      return false;
                  } else {
                      $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                      $target.focus(); // Set focus again
                  };
              });
          }
      }
  });
}

(function($) {
$.fn.drags = function(opt) {

    opt = $.extend({handle:"",cursor:"move"}, opt);

    if(opt.handle === "") {
        var $el = this;
    } else {
        var $el = this.find(opt.handle);
    }

    return $el.css('cursor', opt.cursor).on("mousedown", function(e) {
        if(opt.handle === "") {
            var $drag = $(this).addClass('draggable');
        } else {
            var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
        }
        var z_idx = $drag.css('z-index'),
            drg_w = $drag.outerWidth(),
            pos_x = $drag.offset().left + drg_w - e.pageX;
        $drag.css('z-index', 1000).parents().on("mousemove", function(e) {
            if($('.am-scaner-circle').hasClass("draggable")) {
              $(".am-scan-1").attr("style", "clip: rect(auto, "+(e.pageX)+"px, auto, auto)");
              $(".am-scaner").css("left", e.pageX);
            }
            $('.draggable').offset({
                //left:e.pageX + pos_x - drg_w
            }).on("mouseup", function() {
                $(this).removeClass('draggable').css('z-index', z_idx);
            });
            $(document.body).on("mouseup", function() {
              $(".am-scaner-circle").removeClass('draggable').css('z-index', z_idx);
            });
        });
        e.preventDefault(); // disable selection
    }).on("mouseup", function() {
        if(opt.handle === "") {
            $(this).removeClass('draggable');
        } else {
            $(this).removeClass('active-handle').parent().removeClass('draggable');
        }
    });

}
})(jQuery);
