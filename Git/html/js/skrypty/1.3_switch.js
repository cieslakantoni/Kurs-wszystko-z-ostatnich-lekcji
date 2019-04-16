/*var kkw = document.getElementById('komkwadrat')
var boka = parseFloat(prompt("Podaj bok a"));
var bokb = parseFloat(prompt("Podaj bok b"));
var pole = boka * bokb;
if (pole > 0){
 document.write("<hr>Boka: "+ boka+ ", Bokb: " + bokb + ", pole wynosi: " + pole + "cm<sup>2</sup>")
}else{
kkw.innerHTML ='<span style="color:red">Błedne dane</span>';
}
*/

/*var x = prompt ("Podaj pierwszą litere słowa, figury której chcesz obliczyć k-kwadrat, p-prostokąt, t-trójkąt");
if (x == 'k') {
  var boka = parseFloat(prompt("Podaj bok a"));
  var pole = boka * 2;
  document.write("<hr>Boka: "+ boka + ", pole wynosi: " + pole + "cm<sup>2</sup>")

}
else if (x == 'p'){
  var boka = parseFloat(prompt("Podaj bok a"));
  var bokb = parseFloat(prompt("Podaj bok b"));
  var pole = boka * bokb;
  document.write("<hr>Boka: "+ boka+ ", Bokb: " + bokb + ", pole wynosi: " + pole + "cm<sup>2</sup>")

}else if (x == 't'){
  var bokta = parseFloat(prompt("Podaj bok a w trójkącie"));
  var wysokosc = parseFloat(prompt("Podaj wysokość trójkąta"));
  var pole = 0.5 * bokta * wysokosc;
  kkw.innerHTML = 'Pole trójkąta wynosi: ' + pole + "cm<sup>2</sup>";
}

else{
  kkw.innerHTML ='<span style="color:red">Błedne dane</span>';

}*/
var x = prompt ("Podaj pierwszą litere słowa, figury której chcesz obliczyć k-kwadrat, p-prostokąt, t-trójkąt");

switch (x){
  case "k":
    var boka = parseFloat(prompt("Podaj bok a"));
    var pole = boka * 2;
    document.write("<hr>Boka: "+ boka + ", pole wynosi: " + pole + "cm<sup>2</sup>")
    break;
  case "p":
    var boka = parseFloat(prompt("Podaj bok a"));
    var bokb = parseFloat(prompt("Podaj bok b"));
    var pole = boka * bokb;
    document.write("<hr>Boka: "+ boka+ ", Bokb: " + bokb + ", pole wynosi: " + pole + "cm<sup>2</sup>")
    break;
  case "t":
    var bokta = parseFloat(prompt("Podaj bok a w trójkącie"));
    var wysokosc = parseFloat(prompt("Podaj wysokość trójkąta"));
    var pole = 0.5 * bokta * wysokosc;

    document.write('Pole trójkąta wynosi: ' + pole + "cm<sup>2</sup>")
    break;
  default:
    document.write('<span style="color:red">Błedne dane</span>');
}

/*Napisz program który poprosi użytkownika o podanie swojego wieku, jeśli bedzie mial wiecej niz 18 lat to przekieruje go na strone wp.pl, w przeciwnym razie na strone dla dzieci.*/



var wiek = prompt("Podaj swój wiek");

if (wiek > 18)
wiek = 'Dorosly';
 switch (wiek) {
   case 'Dorosly':
  /* window.location ='https://www.wp.pl/';*/
     alert('Dorosły');
     break;
   default:
   /*window.location ='https://www.youtube.com/watch?v=kYmzv18kWnU';*/
   alert('Dzieciak');
 }
