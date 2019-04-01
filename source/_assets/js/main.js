function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min; //The maximum is inclusive and the minimum is inclusive 
}
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
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
          scrollTop: target.offset().top - 100
        }, 1000);
      }
    }
  });
var Site = {

  header : function() {
    $('.header__nav__toggle').click(function(){
      var button = $(this);
      button.toggleClass('is-active');
      button.siblings('.header__nav__list').toggleClass('is-active');
    });

    $('.header__nav__item a').click(function(){
      $('.header__nav__toggle').click();
    });
  },

  grid : function() {
    setInterval(function(){
      var x, y, axis, direction;
      x = getRandomInt(0, $('.grid__line').length);
      y = getRandomInt(0, $('.grid__line').length);
      axis = getRandomInt(0, 1); // 0 = x, 1 = y
      direction = getRandomInt(0, 1); // 0 = backward, 1 = forward

      var light = $('<b class="grid__light" />').appendTo('.grid__plane').css({
        top: (y * 50) + "px",
        left: (x * 50) + "px"
      });
      setTimeout(function(){
        var transform;
        if (axis === 1) {
          transform = 'translateY(' + ((direction === 0) ? (-1 * parseInt(light.css('top'))) : ($(window).height() - parseInt(light.css('top')))) + 'px)';
        } else {
          transform = 'rotate(90deg) translateY(' + ((direction === 0) ? (-1 * parseInt(light.css('left'))) : ($(window).height() - parseInt(light.css('left')))) + 'px)';
        }
        light.css('transform', transform);
      }, 66);
      setTimeout(function(){
        light.css('opacity',0);
      }, 5500);
      setTimeout(function(){
        light.remove();
      }, 6066);
    }, 1000);
    window.animateGrid = function(){
      window.cancelAnimationFrame(window.animateGrid);
      if ($(window).scrollTop() > 0) {
        var rot = 30 - ($(window).scrollTop() / 26);
        // var filter = 0.01 * $(window).scrollTop();
        var filter = ( $(window).height() - ($(window).scrollTop() / 2) ) / $(window).height() * 100;
        $('.grid__plane').css('transform', 'rotateX(' + ((rot > 0) ? rot : 0) + 'deg) rotateY(0deg) rotateZ(0deg) translate3d(-50%, 0, 0)');
        // if (filter <= 10) {
        if (filter >= 40) {
          $('.grid').css('filter', 'brightness('+filter+'%');
          // $('.grid').css('filter', 'blur('+filter+'px)');
        }
      } else {
        $('.grid, .grid__plane').removeAttr('style');
      }
    };

    document.addEventListener('scroll', (evt) => {

      window.requestAnimationFrame(window.animateGrid);

    });
  },

  pageHome : function() {
    var logo = $('.js-logo').clone(), numLogos = 10, i;
    for(i = 1; i < numLogos + 1; i++) {
      tempLogo = logo.clone();
      tempLogo.find('.logo__img').addClass('logo__img--'+i);
      tempLogo.appendTo('.logo');
      setTimeout(function(){
        $('.logo').find('.js-logo').last().remove();
      }, (numLogos * 250) - (i * 100))
    }
    setTimeout(function(){
      $('.logo.is-hidden').removeClass('is-hidden')
      $('.grid.is-hidden').removeClass('is-hidden');
      setTimeout(function(){
        $('.grid').addClass('is-loaded');
        $('.body').addClass('is-loaded');
        Site.grid();
      }, numLogos*300);
    }, 300);

    document.addEventListener('scroll', (evt) => {
      if ($(window).scrollTop() > $(window).height() * 0.75 ) {
        if (!$('.header__nav').hasClass('is-sticky')) {
          window.requestAnimationFrame(function(){
            $('.header__nav').addClass('is-sticky');
          });
        }
      } else {
        $('.header__nav').removeClass('is-sticky');
      }
    });
  },
  pageGeneric : function() {
    setTimeout(function(){
      $('.grid.is-hidden').removeClass('is-hidden');
      setTimeout(function(){
        $('.grid').addClass('is-loaded');
        Site.grid();
      }, 300);
    }, 300);
  },
  init : function() {
    var _self = this;
    _self.header();
    if ($('.body').hasClass('body--home')) { _self.pageHome() };
    if ($('.body').hasClass('body--generic')) { _self.pageGeneric(); }
  }
};

$(function(){
  Site.init();
});