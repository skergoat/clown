/* choose by radio */

// select payment choice with radio 
function selectChoiceRadio($element){
    // get radio id 
    let id = $($element).attr('id');
    // then add class to the box 
    $('.shipping-choice:not(#shipping-'+id+')').removeClass('choice-selected');
    $('#shipping-'+id).addClass('choice-selected');
}

// select payment choice with Box 
function selectChoiceBox($element){    
    // get radio id 
    let data = $($element).attr('data-url');
    // change box style 
    $('.shipping-choice:not(#payment-'+data+')').removeClass('choice-selected');
    $($element).addClass('choice-selected');
    // then add check radio 
    $('.payment-selection:not(#'+data).prop('checked', false);
    $('#'+data).prop('checked', true);
}

// click 
$('.shipping-selection').click(function() {
    selectChoiceRadio(this);
});

$('.shipping-choice').click(function() {
    selectChoiceBox(this);
});