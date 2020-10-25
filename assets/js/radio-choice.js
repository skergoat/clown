/* choose by radio */

// select payment choice with radio 
function selectChoiceRadio($element){
    // get radio id 
    let id = $($element).attr('id');
    // then add class to the box 
    $('.'+$val+'-choice:not(#'+$val+'-'+id+')').removeClass('choice-selected');
    $('#'+$val+'-'+id).addClass('choice-selected');
}

// select payment choice with Box 
function selectChoiceBox($element){    
    // get radio id 
    let data = $($element).attr('data-url');
    // change box style 
    $('.'+$val+'-choice:not(#payment-'+data+')').removeClass('choice-selected');
    $($element).addClass('choice-selected');
    // then add check radio 
    $('.payment-selection:not(#'+data).prop('checked', false);
    $('#'+data).prop('checked', true);
    // colissimo option 
    if($('#colissimo').is(':checked')) { 
        $('.dropdown.dropdown-reception').addClass('active');
    }
    else {
        $('.dropdown.dropdown-reception').removeClass('active');
    }
}

// click 
$('.'+$val+'-selection').on('click', function() {
    selectChoiceRadio(this);
});

$('.'+$val+'-choice').on('click', function() {
    selectChoiceBox(this);
});



