// card focus (shop page)
$('.card-hover').on('click', function(e) {
    // disable script when click on button
    if(!$(e.target).closest('a').length){
        // bigger card 
        $(this).toggleClass('focus');
        if($('.card-hover').not(this).hasClass('focus')) {
            $('.card-hover').not(this).removeClass('focus');
        }
        // data url 
        let data = $(this).attr('data-url');
        $('#info-plus-'+data).toggleClass('open');
        if($('.info-plus').not('#info-plus-'+data).hasClass('open')) {
            $('.info-plus').not('#info-plus-'+data).removeClass('open')
        }
    }
});
