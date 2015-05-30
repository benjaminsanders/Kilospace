// JavaScript Document

//Times text typing
$.fn.retype = function(delay) {
    var el = this,
        t = el.text(),
        c = t.split(''),
        l = c.length,
        i = 0;
    delay = delay || 60;
    el.empty();
    setInterval(function(){
        if(i < l) el.text(el.text() + c[i++]);
    }, delay);
};


$('retype').retype();



$('#div_with_text').hide();


function show() {
    $('#div_with_text').fadeIn('slow');
}
setTimeout(show, 6500);



//var audio = new Audio('file.mp3');
//audio.play();


$('#mtoogle').toggle(
function () {
document.getElementById('playTune').pause();
},
function () {
document.getElementById('playTune').play();
}
);