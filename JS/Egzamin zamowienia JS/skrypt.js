var id = 0;
var i = 1;
while(i<=4){
	braki(i);
	i++
}


function braki(a) {
	var dostepnailosc = document.getElementById('td' + a).innerHTML;
	var kolor = document.getElementById('td' + a);
	if (dostepnailosc == 0) {
		kolor.style = "background-color: red;";
	}
	if (dostepnailosc >= 1 && dostepnailosc <= 5 ) {
		kolor.style = "background-color: yellow;";
	}
	if (dostepnailosc > 5) {
		kolor.style = "background-color: honeydew;";
	}
	

}
function aktualizuj (a) {
	var ilosc = document.getElementById('td' + a );
	var wartosc = parseFloat(prompt("Podaj nową ilość"));
	if (wartosc == NaN) {
		}

		ilosc.innerHTML = wartosc;
	braki(a);
	
}
function zamow(a){
	id++
	var produkt = document.getElementById('produkt' + a).innerHTML;
	alert("Zamówienie nr: " + id + " Produkt: " + produkt);

}