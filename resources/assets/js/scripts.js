$(function() {
  $(window).scroll(function() {
      $(this).scrollTop() > 100 ? $("#toTop").fadeIn() : $("#toTop").fadeOut()
  });
  $("#toTop").click(function() {
      $("html, body").animate({
          scrollTop: 0
      }, 666)
  });
  function scrollToLink() {
      var t = $(this).attr("href");
      if (t == '#legal') {
          $("#legal").fadeIn("fast");
          $("html, body").animate({
              scrollTop: $($(this).attr("href")).offset().top
            }, 666);
        }
        if (t == '#privacy') {
            $("#privacy").fadeIn("fast");
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top
            }, 666);
        }
    }
    $(".navbar-nav a, .breadcrumb a, .section-link-icon").bind("click", scrollToLink);
});
