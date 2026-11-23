var licznik = 1;
var zdj =  document.getElementById('zdj');
function nastepne() {
	licznik++
	if (licznik > 5) {
		licznik = 1;
	}
	

	
	zdj.src = licznik + ".jpg";
	
console.log(licznik)
	
	
}
function poprzednie() {
licznik --
if (licznik == 0)
{
	licznik = 5;
}
zdj.src = licznik + ".jpg";
console.log(licznik)
}
function zmiana (photo, numer){
	zdj.src = photo + ".jpg"; 
	licznik = numer;
}