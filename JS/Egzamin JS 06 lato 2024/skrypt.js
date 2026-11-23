function ukryj1() {
	var form1 = document.getElementById('formularz1');
	var form2 = document.getElementById('formularz2');

	form1.style = "visibility: hidden;";
	form2.style = "visibility: visible;";
}
function ukryj2() {
	var form3 = document.getElementById('formularz3');
	var form2 = document.getElementById('formularz2');


	form2.style = "visibility: hidden;";
	form3.style = "visibility: visible;";
	
}
function zatwierdz(){
	var imie = document.getElementById('imie').value;
    var nazwisko = document.getElementById('nazwisko').value;
    var haslo1 = document.getElementById('haslo1').value;
    var haslo2 = document.getElementById('haslo2').value;

if (haslo1 != haslo2) {
	alert("Podane hasła różnią się");
}
	console.log("Witaj " + imie + " "+ nazwisko);
}