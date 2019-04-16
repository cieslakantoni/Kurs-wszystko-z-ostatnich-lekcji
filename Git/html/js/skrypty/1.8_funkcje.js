function witaj(imie){
  document.write('Witaj ' + imie);
}
let imie;
imie = prompt("Wpisz swoje imie")
witaj(imie);


//Pole prostokąta
function poleProstokata(a, b){
  let pole = a * b;
  return pole;
}

let bokA =prompt('Podaj bok a: ');
let bokB =prompt('Podaj bok b: ');

document.write('<br>Bok a: ' + bokA + '<br>Bok b: ' + bokB + '<br>Pole prostokąta wynosi: '+ poleProstokata(bokA, bokB)+ 'cm<sup>2</sup><br><br>');


//funkcja zwracajaca dwie wartosci

function poleObjetosc(szerokosc, dlugosc, wysokosc){
let pole = szerokosc * dlugosc;
let objetosc = pole * wysokosc;
let wynik = [pole, objetosc];
return wynik;

}

let pole = poleObjetosc(2, 3, 4) [0];
let objetosc = poleObjetosc(2, 3, 4) [1];

document.write('Pole wynosi: '+ pole + 'cm<sup>2</sup><br>');
document.write('<br>Objetosc wynosi: '+ objetosc + 'cm<sup>3</sup><br>');


/* Utwórz funkcje obliczajaca pole i obwód kołą,
   promien podaje użytkownik z klawiatury, w polu tekstowym,
   przycisk wywołuje funckcje i wyswietla wynik w bloku na stronie
   w formacie:
   Pole koła: ...
   Obwód koła: ...
*/




let promien;
let przycisk = document.getElementById('przycisk');
let komunikat = document.getElementById('komunikat');
let pi;
pi = Math.PI;

function poleObwod(){
  promien = Number(document.getElementById('promien').value);
  r = parseFloat(promien);
  let polek = pi * (promien * promien);
  polek = polek.toFixed(2);
  let obwodk = 2 * pi *promien;
  obwodk = obwodk.toFixed(2);
  let wynikk = [polek, obwodk];
  komunikat.innerHTML = 'Pole koła: <span style="color:red">'+ wynikk[0] +
  'cm<sup>2</sup2></span>' + '<br> Obwód koła: <span style="color:red">'+wynikk[1]+ 'cm</span><hr>';
}
przycisk.addEventListener('click', poleObwod);
