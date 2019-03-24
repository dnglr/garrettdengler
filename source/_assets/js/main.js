var Site = {

  home : function() {
    var logo = $('.js-logo').clone(), numLogos = 10, i;
    for(i = 1; i < numLogos + 2; i++) {
      tempLogo = logo.clone();
      tempLogo.find('.logo__img').addClass('logo__img--'+i);
      tempLogo.appendTo('.logo');
      setTimeout(function(){
        $('.logo').find('.js-logo').last().remove();
      }, (numLogos * 200) - (i * 100))
    }
    setTimeout(function(){
      $('.grid.is-hidden, .logo.is-hidden').removeClass('is-hidden');
    }, 200);
    
  },
  init : function() {
    var _self = this;
    _self.home();
  }
};

$(function(){
  Site.init();
});