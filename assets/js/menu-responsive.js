// open close responsive menu 
let button = document.getElementById('open-menu');
let menu = document.getElementById('menu-responsive');
let ul = document.getElementById('menu-responsive__ul');
let ulHeight = ul.offsetHeight; 

button.addEventListener('click', function() {
    if(!menu.classList.contains("active")) {
        menu.classList.add("active");
        menu.style.height = ulHeight + "px";
    }
    else {
        menu.classList.remove("active");
        menu.style.height = "0px";
    } 
});

// close responsive menu when resize window 
window.addEventListener('resize', function() {
    var w=window,
    d=document,
    e=d.documentElement;
    console.log(e.clientWidth);
    if(e.clientWidth > 992 && menu.classList.contains("active")) {
        menu.classList.remove("active");
        menu.style.height = "0px";
    }
});
