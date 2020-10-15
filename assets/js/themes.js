// open close themes 
$('.theme-btn').on('click', function() {
    // open / close 
    let data = $(this).attr('data-url');
    $('#themes-open-'+data).toggleClass('active');
    // close others
    if($('.search-clik-open').not('#themes-open-'+data).hasClass('active')) {
        $('.search-clik-open').not('#themes-open-'+data).removeClass('active');
    }
});