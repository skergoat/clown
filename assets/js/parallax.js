// this script create header parallax effect 

// on page load 

// window width 
let width = $(window).width();
// then activate parallax or not 
if(width > 768) {
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        $('#parallax-image').css('top', -(scrollTop * 0.6) + 'px');
    });
}
else {
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        $('#parallax-image').css('top', -(scrollTop * 0) + 'px');
    });
}

// on resize 
$(window).on('resize', function() {
    // window width 
    let width = $(window).width();
    // then activate parallax or not 
    if(width > 768) {
        $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop();
            $('#parallax-image').css('top', -(scrollTop * 0.6) + 'px');
        });
    }
    else {
        $(window).on('scroll', function() {
            var scrollTop = $(this).scrollTop();
            $('#parallax-image').css('top', -(scrollTop * 0) + 'px');
        });
    }
});

