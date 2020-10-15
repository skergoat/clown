// card focus (shop page)
$('.card-hover').on('click', function() {
    $(this).toggleClass('focus');
    if($('.card-hover').not(this).hasClass('focus')) {
        $('.card-hover').not(this).removeClass('focus');
    }
});