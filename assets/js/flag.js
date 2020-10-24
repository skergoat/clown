// open flag popup
$('.flag-current').on('click', function() {
    $('.flag-popup').toggleClass('open');
});
// toggle flag 
$('.flag-bottom').on('click', function() {
    // data url 
    let data = $(this).attr('data-url');
    // toggle flag top 
    $('.flag-top-en').toggleClass('flag-current');
    $('.flag-top-fr').toggleClass('flag-current');
    // toggle flag bottom 
    $(this).toggleClass('flag-active');
    $('.flag-bottom-'+data).toggleClass('flag-active');
});