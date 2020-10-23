
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

window.Site = {

  // gridWorker: null,

  header : function() {

    var headerTimeout = window.location.hash ? 1 : 300;


    $('.header__nav__toggle').click(function(){
      var button = $(this);
      button.toggleClass('is-active');
      button.siblings('.header__nav__list').toggleClass('is-active');
    });

    $('.header__nav__item a').click(function(){
      if($('.header__nav__toggle').hasClass('is-active')) { 
        $('.header__nav__toggle').click();
      }
    });
    var logo = $('.js-logo').clone(), numLogos = 10, i;
    for(i = 1; i < numLogos + 1; i++) {
      tempLogo = logo.clone();
      tempLogo.find('.logo__img').addClass('logo__img--'+i);
      tempLogo.appendTo('.logo');
      setTimeout(function(){
        $('.logo').find('.js-logo').last().remove();
      }, (numLogos * 250) - (i * 100))
    }
    $('.grid__plane').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
      $('.grid').addClass('is-loaded');
      // Site.gridWorker = new Worker(window.gridjs);
      window.Grid.init();
    });
    setTimeout(function(){
      $('.logo.is-hidden').removeClass('is-hidden');
      $('.grid.is-hidden').removeClass('is-hidden');
      setTimeout(function(){
        $('.body').addClass('is-loaded');
        
      }, numLogos*headerTimeout);
    }, headerTimeout);
  },

  pageHome : function() {
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
        window.Grid.init();
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
  window.Site.init();
});