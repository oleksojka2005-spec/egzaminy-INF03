function pszczola() {

var blur = document.getElementById('blur');
var sepia = document.getElementById('sepia');
var negatyw = document.getElementById('negatyw');
var obraz1 = document.getElementById('obraz1');



if (blur.checked == true) {
	obraz1.style = 'filter: blur(5px);';
}

if (sepia.checked == true) {

	obraz1.style = 'filter: sepia(100%);';
}

if (negatyw.checked == true) {
	obraz1.style = 'filter: invert(100%);';
}

}
function kolorowy() {
	var obraz2 = document.getElementById('obraz2');
	obraz2.style = 'filter: grayscale(0%);';
}
function czarny() {
	var obraz2 = document.getElementById('obraz2');
	obraz2.style = 'filter: grayscale(100%);';
}

function kontr() {
	var obraz3 = document.getElementById('obraz3');
	var suwak = document.getElementById('k3').value;
	
obraz3.style = 'filter: contrast( '+ suwak +'%);';

	
}