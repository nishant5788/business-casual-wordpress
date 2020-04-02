(function($) {
    
    if($('.list-hours').length > 0) {
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
    }
    
    $('[data-toggle="tooltip"]').tooltip();
  
})(jQuery);

