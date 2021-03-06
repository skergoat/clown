// themes menu 
$('.theme-btn').on('click', function() {
    // open / close 
    let data = $(this).attr('data-url');
    $('#themes-open-'+data).toggleClass('active');
    // close others
    if($('.search-clik-open').not('#themes-open-'+data).hasClass('active')) {
        $('.search-clik-open').not('#themes-open-'+data).removeClass('active');
    }
});

// sub menu 
$('.sup-menu li').on('click', function() { 
    // check if data url exists 
    let attr = $(this).attr('data-url');
    if (typeof attr !== typeof undefined && attr !== false) {
        $(this).toggleClass('selected');
        $('#li-'+attr).toggleClass('selectioned');
        // close others 
        if($('.sub-menu').not('#li-'+attr).hasClass('selectioned')) {
            $('.sub-menu').not('#li-'+attr).removeClass('selectioned');
            $('.sup-menu li').not(this).removeClass('selected');
        }
    }
});

// sub menu li 
$('.sub-menu li').on('click', function() {
    $(this).addClass('selection');
    // close others 
    if($('.sub-menu li').not(this).hasClass('selection')) {
        $('.sub-menu li').not(this).removeClass('selection');
    }
});

// responsive 

$('#search-responsive').on('click', function() {
    $('#aside-responsive').toggleClass('active');
    if($('#aside-responsive').hasClass('active')) {
        $('body').css('overflow', 'hidden');
        $('#search-responsive .icon-search').toggleClass('icon-cancel').toggleClass('icon-search')
        $('#search-responsive .icon-cancel').css('color', 'black!important');
    }
    else {
        $('body').css('overflow', 'scroll');
        $('#search-responsive .icon-cancel').toggleClass('icon-search').toggleClass('icon-cancel');
    }
});
