entry();

$(document).ready(function () {

  subscribe();
  loadMore();
  sharer();
  followScroll();
});

function entry() {

  window.onload = function () {
    $("body").addClass("am-play");
  }

}

function followScroll() {
  (function ($) {

    try {
      var element = $('.follow-scroll'),
        originalY = element.offset().top;
      var height = $('.am-social-share-slider').height() + originalY - 100;
      var topMargin = 30;

      element.css('position', 'relative');

      $(window).on('scroll', function (event) {
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height) scrollTop = height;

        element.stop(false, false).animate({
          top: scrollTop < originalY ? 0 : scrollTop - originalY + topMargin
        }, 500);
      });
    }
    catch (e) {
      console.log('error');
    }

  })(jQuery);
}

function sharer() {

  $('.am-radial-black-button').on('click', function (e) {
    $('*[data-share=' + $(this).data("share") + ']').toggleClass("active");
  })

}

function loadMore() {

  $(document).on('click', '#loadMore', function(e){
    e.preventDefault();

    $('.am-blog .am-transp-button .fa-chevron-circle-down').addClass('d-none');
    $('.am-blog .am-transp-button .fa-spinner').addClass('d-block');

    $("<div>").load($(this).data("url"), function (response) {
      // I took the content of only the listings from page 2 (or whatever page it happens to be)
      $('#loadMore').remove();
      $('.am-blog-container').append($(this).find(".am-blog-container").html());
      
    });
    
  });

}

function subscribe() {


  $('#am-subscribe-form').on('submit', function () {
    e.preventDefault();

    var $form = $(e.target);

    $.ajax({
      url: $form.attr('action'),
      type: 'GET',
      data: $form.serialize(),
      dataType: 'jsonp',
      contentType: "application/json; charset=utf-8",
      success: function (data) {
        $('.am-footer .form-group').slideUp(() => {
          $('.am-footer .am-form-thankyou').slideDown();
        });

      }
    });
  });
}
