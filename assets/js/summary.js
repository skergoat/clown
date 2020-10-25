$('#shipping-address-link').on('click', function(e) {
    // toggle class
    e.preventDefault();
    $('.shipping-adress').toggleClass('active');
    // space-between position top
    if($('.shipping-adress').hasClass('active')) {
        $('#space-between').css('top', '25%');
        $(this).text('Gardez votre addresse de facturation');    
    }
    else {
        $('#space-between').css('top', '29%'); 
        $(this).text('Entrez une addresse de livraison différente'); 
    }
    // arrow 
    $('#address-arrow').toggleClass('arrow-down').toggleClass('arrow-up');  
});