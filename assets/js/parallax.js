// this script create header parallax effect 

// on page load 

// window width 
let width = $(window).width();
// then activate parallax or not 
if(width > 400) {
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        $('#parallax-image').css('top', -(scrollTop * 0.6) + 'px');
    });
}
else {
    $(window).scroll(function() {
        var scrollTop = $(this).scrollTop();
        $('#parallax-image').css('top', -(scrollTop * 0) + 'px');
    });
}

// on resize 
$(window).resize(function() {
    // window width 
    let width = $(window).width();
    // then activate parallax or not 
    if(width > 400) {
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            $('#parallax-image').css('top', -(scrollTop * 0.6) + 'px');
        });
    }
    else {
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();
            $('#parallax-image').css('top', -(scrollTop * 0) + 'px');
        });
    }
});

