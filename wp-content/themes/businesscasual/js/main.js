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
        showSearch(); 
    });
    
    // Overlay Close
    $('.search-overlay').on('click', function(){
        closeSearch();
    }); 
    
    // Opening Search from Keys
    // $('body').on('keyup', function(e) {
    //     var $keyCode = e.keyCode;
        
    //     if($keyCode === 83) {
    //         showSearch();
    //     }

    //     if($keyCode === 27) {
    //         closeSearch();
    //     }

    //     console.log(e);

        
    // });


    function showSearch() {
        $('.search-overlay, .searchform').fadeIn();
        $('html, body').css('overflow', 'hidden');
    }
    
    function closeSearch() {
        console.log('close');
        if($('.searchform:visible')) {
        $('.search-overlay, .searchform').fadeOut();
        $('html, body').css('overflow', 'visible');
    }
}
  
})(jQuery);
