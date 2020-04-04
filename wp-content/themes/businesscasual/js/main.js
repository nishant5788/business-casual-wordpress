(function($) {
    
    // Adding Today to List Hours in Store
    if($('.list-hours').length > 0) {
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
    }
    
    // Enabling Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    if($('body').hasClass('logged-in')) {
        $('#menu-item-132').remove();
    }
  
})(jQuery);
