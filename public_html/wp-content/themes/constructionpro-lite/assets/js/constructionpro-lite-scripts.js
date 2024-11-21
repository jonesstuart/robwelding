(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".constructionpro-lite-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".constructionpro-lite-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".constructionpro-lite-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".constructionpro-lite-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".constructionpro-lite-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".constructionpro-lite-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".constructionpro-lite-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".constructionpro-lite-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".constructionpro-lite-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".constructionpro-lite-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".constructionpro-lite-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".constructionpro-lite-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".constructionpro-lite-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".constructionpro-lite-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".constructionpro-lite-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".constructionpro-lite-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".constructionpro-lite-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".constructionpro-lite-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".constructionpro-lite-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".constructionpro-lite-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".constructionpro-lite-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".constructionpro-lite-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".constructionpro-lite-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".constructionpro-lite-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".constructionpro-lite-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".constructionpro-lite-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".constructionpro-lite-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".constructionpro-lite-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".constructionpro-lite-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".constructionpro-lite-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".constructionpro-lite-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".constructionpro-lite-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".constructionpro-lite-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".constructionpro-lite-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".constructionpro-lite-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".constructionpro-lite-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".constructionpro-lite-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".constructionpro-lite-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".constructionpro-lite-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".constructionpro-lite-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".constructionpro-lite-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".constructionpro-lite-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".constructionpro-lite-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".constructionpro-lite-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".constructionpro-lite-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var mightyBuildersStickyMenu = $(".constructionpro-lite-sticky-menu");
    var mightyBuildersStickyNavigation = $(".constructionpro-lite-sticky-navigation");

    if (mightyBuildersStickyMenu.length && scrollTop > 0) {
      mightyBuildersStickyMenu.addClass("sticky-menu-enabled constructionpro-lite-zoom-in-up");
    } else {
      mightyBuildersStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".constructionpro-lite-scrollto-top a").fadeIn();
    } else {
      jQuery(".constructionpro-lite-scrollto-top a").fadeOut();
    }
  });
  jQuery(".constructionpro-lite-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".constructionpro-lite-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });
})(jQuery);
