/* choose by radio */

// auto select mondial relais
$('.option-relais').addClass('active');

// shipping options
function showOptions(options)
{
    // open options 
    $('.option-'+options).addClass('active');
    $('.shipping-option').not($('.option-'+options)).removeClass('active');
    // scroll to 
    let offsetTop = $('#shipping-section').offset().top;
    let gotTo = offsetTop - 100;
    $(document).scrollTop(gotTo);
}

// select payment choice with radio 
function selectChoiceRadio($element){
    // get radio id 
    let id = $($element).attr('id');
    // then add class to the box 
    $('.'+$val+'-choice:not(#'+$val+'-'+id+')').removeClass('choice-selected');
    $('#'+$val+'-'+id).addClass('choice-selected');
    // options
    showOptions(id);
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
    // options
    showOptions(data);
}

// click 
$('.'+$val+'-selection').on('click', function() {
    selectChoiceRadio(this);
});

$('.'+$val+'-choice').on('click', function() {
    selectChoiceBox(this);
});



