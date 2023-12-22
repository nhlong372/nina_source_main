(function($) {
  $.fn.openPopup = function( settings ) {
    var elem = $(this);
    // Establish our default settings
    var settings = $.extend({
      anim: 'fade'
    }, settings);
    elem.show();
    elem.find('.popup-content').addClass(settings.anim+'In');
  }
  
  $.fn.closePopup = function( settings ) {
    var elem = $(this);
    // Establish our default settings
    var settings = $.extend({
      anim: 'fade'
    }, settings);
    elem.find('.popup-content').removeClass(settings.anim+'In').addClass(settings.anim+'Out');
    
    setTimeout(function(){
        elem.hide();
        elem.find('.popup-content').removeClass(settings.anim+'Out')
      }, 500);
  }
    
}(jQuery));