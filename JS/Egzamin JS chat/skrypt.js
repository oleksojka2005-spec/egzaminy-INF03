function answer(){
var wiad =	document.getElementById('wiadomosc').value;
var chat = document.getElementById('chat');
 var newDiv = document.createElement("div");
 chat.appendChild(newDiv);
newDiv.classList.add("chatJ");
newDiv.innerHTML = "<img style='float: left;' src='Jolanta.jpg'> " + wiad;
newDiv.scrollIntoView();


}

function generuj(){

var tab = ['cześć', 'jak się masz', 'co tam?', 'spier...', 'umówimy się?', 'co robisz', 'jasne', 'ok', 'jak tam?']
var los = Math.round(Math.random()* 8);
var odplos = tab[los];
var newDiv2 = document.createElement("div");
chat.appendChild(newDiv2);
newDiv2.classList.add("chatK");
newDiv2.innerHTML = "<img style='float: right' src='krzysztof.jpg'> " + odplos;
newDiv2.scrollIntoView();

}