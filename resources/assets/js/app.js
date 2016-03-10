$('.carousel').carousel({
    interval: 5000 //changes the speed
});

var cambio = false;
$('.nav li a').each(function(index) {
    if(this.href.trim() == window.location){
        $(this).parent().addClass("active");
        cambio = true;
    }
});
if(!cambio){
    $('a.navbar-brand').addClass("active");
};
