/* 
Hide the fadein portion only if javascript is enabled. 
Otherwise it would not appear at all if javascript was disabled 
*/
document.write('<style>#fadein{display:none;}#fadeinslow{display:none;}#fadeinfast{display:none;}#fade1{display:none;}#fade2{display:none;}#fade3{display:none;}#fade4{display:none;}#fade5{display:none;}#fade6{display:none;}#fade7{display:none;}#fade8{display:none;}</style>');
/* 
Fadein Function. Adds a slow fade in to anything with the id "fadein" 
*/
$(function() {
    $('#fadein').fadeIn('slow');
	$('#fadeinslow').fadeIn(2000);
	$('#fadeinfast').fadeIn('fast');
	$('#fade1').hide(0).delay(50).fadeIn(750);
	$('#fade2').hide(0).delay(550).fadeIn(750);
	$('#fade3').hide(0).delay(1050).fadeIn(750);
	$('#fade4').hide(0).delay(1550).fadeIn(750);
	$('#fade5').hide(0).delay(2050).fadeIn(750);
	$('#fade6').hide(0).delay(2550).fadeIn(750);
	$('#fade7').hide(0).delay(3050).fadeIn(750);
	$('#fade8').hide(0).delay(3550).fadeIn(750);
});







