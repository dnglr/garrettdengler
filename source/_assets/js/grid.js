
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min; //The maximum is inclusive and the minimum is inclusive 
}

window.Grid = {
  init : function() {
    // $('.grid__light').each(function(index){
    //   var light = $(this);
    //   setTimeout(function(){
    //     window.Grid.light(light);
    //   }, index * getRandomInt(1, 3) * 1000);
    // });
    
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
        } else {
          $('.grid').css('filter', 'brightness(40%');
        }
      } else {
        $('.grid, .grid__plane').removeAttr('style');
      }
    };
    
    if (!$('.grid').hasClass('grid--interior')) {
      document.addEventListener('scroll', (evt) => {

        window.requestAnimationFrame(window.animateGrid);

      });
      if(window.location.hash) {
        setTimeout(function(){
          $('[href*="'+window.location.hash+'"]').click();
        },500);
       
      }
    }
  },

  // light: function(light) {
  //   var x, y, axis, direction;
  //   x = getRandomInt(0, $('.grid__line').length);
  //   y = getRandomInt(0, $('.grid__line').length);
  //   axis = getRandomInt(0, 1); // 0 = x, 1 = y
  //   direction = getRandomInt(0, 1); // 0 = backward, 1 = forward

  //   light.css({
  //     top: (y * 50) + "px",
  //     left: (x * 50) + "px"
  //   });
  //   setTimeout(function(){
  //     var transform;
  //     if (axis === 1) {
  //       transform = 'translateY(' + ((direction === 0) ? (-1 * parseInt(light.css('top'))) : ($(window).height() - parseInt(light.css('top')))) + 'px)';
  //     } else {
  //       transform = 'rotate(90deg) translateY(' + ((direction === 0) ? (-1 * parseInt(light.css('left'))) : ($(window).height() - parseInt(light.css('left')))) + 'px)';
  //     }
  //     light.css('transform', transform);
  //   }, 66);
  //   setTimeout(function(){
  //     light.css('opacity',0);
  //   }, 5500);
  //   setTimeout(function(){
  //     window.Grid.light(light);
  //   }, 6066);
  // },
};