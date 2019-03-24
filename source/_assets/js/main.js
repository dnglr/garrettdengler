var Site = {

  home : function() {
    var logo = $('.js-logo').clone(), numLogos = 10, i;
    for(i = 1; i < numLogos + 1; i++) {
      tempLogo = logo.clone();
      tempLogo.find('.logo__img').addClass('logo__img--'+i);
      tempLogo.appendTo('.logo');
      setTimeout(function(){
        $('.logo').find('.js-logo').last().remove();
      }, (numLogos * 200) - (i * 100))
    }
    setTimeout(function(){
      $('.grid.is-hidden, .logo.is-hidden').removeClass('is-hidden');
      setTimeout(function(){
        $('.grid').addClass('is-loaded');
      }, numLogos*300);
    }, 200);

    var animateGrid = function(){
      if ($(window).scrollTop() > 0) {
        var rot = 30 - ($(window).scrollTop() / 26);
        console.log('rotateX('+ ((rot > 0) ? rot : 0) +'deg) rotateY(0deg) rotateZ(0deg) translate3d(-50%, 0, 0)');
        $('.grid__plane').css('transform', 'rotateX(' + ((rot > 0) ? rot : 0) + 'deg) rotateY(0deg) rotateZ(0deg) translate3d(-50%, 0, 0)');
      }
    };

    document.addEventListener('scroll', (evt) => {

      // var persp = 200 - ($(window).scrollTop() / 4);
      // $('.grid').css('perspective', (persp > 0) ? persp + 'px' : '0px');

      
      window.requestAnimationFrame(animateGrid);

    }, {
      capture: true,
      passive: true
    });
    
  },
  init : function() {
    var _self = this;
    _self.home();
  }
};

$(function(){
  Site.init();
});