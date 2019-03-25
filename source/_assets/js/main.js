function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min; //The maximum is inclusive and the minimum is inclusive 
}

var Site = {

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
          transform = 'translateX(' + ((direction === 0) ? (-1 * parseInt(light.css('left'))) : ($(window).height() - parseInt(light.css('left')))) + 'px)';
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
        console.log(filter);
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
        Site.grid();
      }, numLogos*300);
    }, 300);

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
    if ($('.main').hasClass('main--home')) { _self.pageHome() };
    if ($('.main').hasClass('main--generic')) { _self.pageGeneric(); }
  }
};

$(function(){
  Site.init();
});