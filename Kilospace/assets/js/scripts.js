/* 
Hide the fadein portion only if javascript is enabled. 
Otherwise it would not appear at all if javascript was disabled 
*/
document.write('<style>#fadein{display:none;}#fadeinslow{display:none;}#fadeinfast{display:none;}#fade1{display:none;}#fade2{display:none;}#fade3{display:none;}#fade4{display:none;}#fade5{display:none;}#fade6{display:none;}#fade7{display:none;}#fade8{display:none;}div#text1{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text2{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text3{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text4{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text5{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text6{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text7{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text8{width:0px;height:2em;white-space:nowrap;overflow:hidden;}div#text9{width:0px;height:2em;white-space:nowrap;overflow:hidden;}</style>');
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
	$('#fade9').hide(0).delay(4050).fadeIn(750);
	$('#fade10').hide(0).delay(4550).fadeIn(750);
	$('#fade11').hide(0).delay(5050).fadeIn(750);
	$('#fade12').hide(0).delay(5550).fadeIn(750);
	
	var spanWidth = $('#text1 span').width();
	$('#text1').animate( { width: spanWidth }, 3000 );
	
	var spanWidth = $('#text2 span').width();
	$('#text2').animate( { width: spanWidth }, 3000 );
});










