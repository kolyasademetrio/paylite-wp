$(window).on("load", function () {
   /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)
      ? $("body").addClass("ios")
      : $("body").addClass("web"),
      (document.body.dataset.preloader = !1);
}),
   /* viewport width */
   $(function () {
      /* placeholder*/
      // $('input, textarea').each(function () {
      //   var placeholder = $(this).attr('placeholder');
      //   $(this).focus(function () {
      //     $(this).attr('placeholder', '');
      //   });
      //   $(this).focusout(function () {
      //     $(this).attr('placeholder', placeholder);
      //   });
      // });
      // /* placeholder*/
      /* burger */
      $(".js-menu-btn-open").length &&
         $(".js-menu-btn-open").click(function (e) {
            e.preventDefault(e),
               $(".js-menu").addClass("m-active"),
               $("body").addClass("navigation-opened");
         }),
         document.querySelector(".js-menu-btn-close") &&
            document.querySelector(".js-menu-btn-close").addEventListener("click", function () {
               console.log(),
                  $(".js-menu").removeClass("m-active"),
                  $("body").removeClass("navigation-opened");
            }),
         // if ($('.js-list .nav__item').length) {
         //   $('.js-list .nav__item').click(function (e) {
         //     $('.js-list .nav__item').removeClass('m-active');
         //     $(this).addClass('m-active');
         //     $('body').removeClass('navigation-opened');
         //     $('.js-list').removeClass('m-active');
         //   });
         // }
         // if ($('.js-toggle').length) {
         //   $('.js-toggle').click(function (e) {
         //     e.preventDefault(e);
         //     $(this).toggleClass('m-active');
         //     $('.toggle__content').slideToggle().toggleClass('m-hidden');
         //   });
         // }
         // if ($('.js-toggle-once').length) {
         //   $('.js-toggle-once').one('click', function (e) {
         //     e.preventDefault(e);
         //     $(this).toggleClass('m-active');
         //     $('.toggle__content').slideToggle().toggleClass('m-hidden');
         //   });
         // }
         // if ($('.js-gallery').length) {
         //   $('.js-gallery').magnificPopup({
         //     delegate: 'a',
         //     type: 'image',
         //     tLoading: 'Loading image #%curr%...',
         //     mainClass: 'mfp-img-mobile',
         //     gallery: {
         //       enabled: true,
         //       navigateByImgClick: true,
         //     },
         //     image: {
         //       tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
         //     },
         //     fixedContentPos: false,
         //     removalDelay: 500, //delay removal by X to allow out-animation
         //     callbacks: {
         //       beforeOpen: function () {
         //         // just a hack that adds mfp-anim class to markup
         //         this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
         //         this.st.mainClass = this.st.el.attr('data-effect');
         //       }
         //     },
         //   });
         // }
         /* components */
         $(".js-available-slider").length &&
            $(".js-available-slider").slick({
               dots: !1,
               autoplay: !1,
               infinite: !0,
               speed: 300,
               slidesToShow: 1,
               slidesToScroll: 1,
               nextArrow:
                  '<button type="button" class="slick-next slick-btn"><svg width="44" height="24" viewBox="0 0 44 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43.0607 13.0607C43.6464 12.4749 43.6464 11.5251 43.0607 10.9393L33.5147 1.3934C32.9289 0.807611 31.9792 0.807611 31.3934 1.3934C30.8076 1.97919 30.8076 2.92893 31.3934 3.51472L39.8787 12L31.3934 20.4853C30.8076 21.0711 30.8076 22.0208 31.3934 22.6066C31.9792 23.1924 32.9289 23.1924 33.5147 22.6066L43.0607 13.0607ZM0 13.5H42V10.5H0V13.5Z" fill="#D9D9D9"/></svg></button>',
               prevArrow:
                  '<button type="button" class="slick-prev slick-btn"><svg width="44" height="24" viewBox="0 0 44 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.93934 10.9393ZM2 13.5H44V10.5H2V13.5Z" fill="#D9D9D9"/></svg></button>',
            });
   });
