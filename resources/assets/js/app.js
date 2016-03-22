$('.carousel').carousel({
    interval: 5000 //changes the speed
});

// $("input[name='rol']").click(function(){
// 	if($(this).val() == 'cliente') {
// 		$('#div-proveedor').hide();
// 		$('#div-cliente').fadeIn('slow');
// 	} else {
// 		$('#div-cliente').hide();
// 		$('#div-proveedor').fadeIn('slow');
// 	}
// });

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