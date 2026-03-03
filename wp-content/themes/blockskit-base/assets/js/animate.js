"use strict";

// Remove the transition class
jQuery(function ($) {
  var animatedElements = document.querySelectorAll(':not(.swiper-slide) > .animated'); // console.log( animatedElements );

  if (animatedElements.length > 0) {
    var _loop = function _loop() {
      var animatedElement = animatedElements[aniIndex];
      var parentHasClass = animatedElement.closest('.swiper-slide') !== null;

      if (!parentHasClass) {
        var animations = [];

        for (index = 0; index < animatedElement.classList.length; index++) {
          if (animatedElement.classList[index].startsWith("animated-")) {
            animations.push(animatedElement.classList[index]);
          }
        } // Create the observer, same as before:


        var observer = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              for (var index = 0; index < animations.length; index++) {
                animatedElement.classList.add(animations[index].replace('animated-', ''));
              }

              return;
            } // animatedElement.classList.remove('animated');

          });
        });
        observer.observe(animatedElement);
      }
    };

    for (var aniIndex = 0; aniIndex < animatedElements.length; aniIndex++) {
      var index;

      _loop();
    }
  }

  $(document).on('bkSlideChangeTransitionStart', function () {
    var animatedElements = $('.swiper-slide').find('.animated');

    if (animatedElements.length > 0) {
      for (var aniIndex = 0; aniIndex < animatedElements.length; aniIndex++) {
        var animatedElement = animatedElements[aniIndex];
        var animations = [];

        for (var index = 0; index < animatedElement.classList.length; index++) {
          if (animatedElement.classList[index].startsWith("animated-")) {
            animations.push(animatedElement.classList[index]);
          }
        }

        for (var index = 0; index < animations.length; index++) {
          $(animatedElement).removeClass(animations[index].replace('animated-', ''));
        }
      }
    }
  });

  function blockskit_base_photography_slider_animation(selector) {
    var animatedElements = $(selector).find('.animated');

    if (animatedElements.length > 0) {
      for (var aniIndex = 0; aniIndex < animatedElements.length; aniIndex++) {
        var animatedElement = animatedElements[aniIndex];
        var animations = [];

        for (var index = 0; index < animatedElement.classList.length; index++) {
          if (animatedElement.classList[index].startsWith("animated-")) {
            animations.push(animatedElement.classList[index]);
          }
        }

        for (var index = 0; index < animations.length; index++) {
          $(animatedElement).addClass(animations[index].replace('animated-', ''));
        }
      }
    }
  }

  $(document).on('bkSlideinit', function () {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          blockskit_base_photography_slider_animation('.swiper-slide-active');
          return;
        }
      });
    });
    observer.observe(document.querySelector('.swiper-wrapper'));
  }); // blockskit_base_photography_slider_animation('.swiper-slide:first-child');

  $(document).on('bkSlideChangeTransitionEnd', function () {
    blockskit_base_photography_slider_animation('.swiper-slide-active');
  });
});