$(function() {
  $(window).scroll(function() {
      $(this).scrollTop() > 100 ? $("#toTop").fadeIn() : $("#toTop").fadeOut()
  }), $("#toTop").click(function() {
      $("html, body").animate({
          scrollTop: 0
      }, 666)
  }), $(".navbar-nav a, .breadcrumb a, .section-link-icon").bind("click", r), $(".contact-btn").click(a)
  function r() {
    var t = $(this).attr("href");
    if ("#" === t.substr(0, 1) && t.length > 1) return "#legal" === t && $("#legal").fadeIn("fast"), $("html, body").animate({
        scrollTop: $($(this).attr("href")).offset().top
    }, 666), !1
  }
});