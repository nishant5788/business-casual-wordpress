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

    // Triggering Team Detail Modal
    $('.team-detail-modal-trigger').on('click', function(){
        var $this = $(this);
        var $target = $this.data('target');
        $($target).modal();
    });
    
    // SearchForm
    $('.searchform-trigger').on('click', function(){
        $('.search-overlay, .searchform').fadeIn();
    });
    
    // Overlay Close
    $('.search-overlay').on('click', function(){
        $('.search-overlay, .searchform').fadeOut();
    }); 
  
})(jQuery);
