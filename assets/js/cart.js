// open / close cart popup
function openCart(){
    $('#cart-popup-window').toggleClass('active');
    console.log('hello');
}
// desktop 
$('#active-cart').on('click', function() {
    openCart();
});
// mobile 
$('#active-carts').on('click', function() {
    openCart();
});