/* choose by radio */

// select payment choice with radio 
function selectChoiceRadio($element){
    // get radio id 
    let id = $($element).attr('id');
    // then add class to the box 
    $('.pay-choice:not(#payment-'+id+')').removeClass('choice-selected');
    $('#payment-'+id).addClass('choice-selected');
}

// select payment choice with Box 
function selectChoiceBox($element){    
    // get radio id 
    let data = $($element).attr('data-url');
    // change box style 
    $('.pay-choice:not(#payment-'+data+')').removeClass('choice-selected');
    $($element).addClass('choice-selected');
    // then add check radio 
    $('.payment-selection:not(#'+data).prop('checked', false);
    $('#'+data).prop('checked', true);
}

// click 
$('.payment-selection').click(function() {
    selectChoiceRadio(this);
});

$('.pay-choice').click(function() {
    selectChoiceBox(this);
});