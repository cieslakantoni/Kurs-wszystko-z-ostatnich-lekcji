/*
    //pętla while

    let i = 0;

    while (i<=5) {
      document.write(i + ' ');
      i++;
    }

    while (i++ < 10){
      document.write(i + ' ');

    }


//Użytkownik podaje z klawiaturey dwie wartosci, pętla bedzie sie wykonywała //tak długo, dopóki x będzie większe lub równe y

    let y = 0;
    let x = 0;
    while (x >=y){
      x = Number(prompt('Podaj x'));
      y = Number(prompt('Podaj y'));
    }
    document.write ('<br> x = '+ x +', y = ' + y );

    //pętla do while

    var wiek;

    do {
    wiek = prompt('Podaj swój wiek')
    if (wiek == 19)
    document.write('<br>Mozesz juz grac w CSa<br>');
    } while (wiek != 19);



    // Wykorzystaj pętle for i do while. Podaj 5 liczb podzielnych przez 2 z //klawiatury. Zapisz je, do tablicy i wyświetl w konsoli Tablice

    var liczby =[];
    let a;


    for (i = 0; i <= 4; i++) {
      do {
        a = prompt("Podaj liczbe parzystą");
        a = parseInt(a);
      } while (a % 2 != 0);
    liczby[i] = a;
    }
    console.log(liczby);
    // Wyświetl na ekrapnie liczby z talbicy z zadania powyżej

    for (i = 0; i < liczby.length; i++) {
      document.write(liczby[i] + ' ');
    }
    document.write('<br>');
    // Użytkownik podaje trzy ulubione kolory z klawiatury, zapisz je na //tablicy i wyświetl na ekranie w formacie kolor 1 = ... kolor 2 = ... //kolor 3 = ...
    var kolory = [];
    let b;
    let kolor;

    for (i = 0; i < 3; i++) {
      let nr = i;
        nr = nr +1;
         kolor = prompt('Podaj swój ulubiony kolor nr ' + nr);
         kolory[i] = kolor;
    }
    console.log(kolory);

    for (i = 0; i < kolory.length; i++) {
      let nr = i;
      nr = nr + 1;
      document.write('<span style = "color:blue">Kolor nr </span>'+ nr +' '+ kolory[i] + '<br>');
    }
    document.write('<hr>');

//Napisz funkcje która pobierze dane z inputa
//i wyswietli je w consoli, po nacisnieciu przycisku.
//Jeśli są liczbą.
document.write('<input type="text" id="liczba">');
document.write('<button id="przycisk">Wyślij</button>');


let elprzycisk = document.getElementById('przycisk');
let elliczba = document.getElementById('liczba');

elprzycisk.onclick = function (){
  if (!isNaN(elliczba.value)) {
    console.log(elliczba.value);
  }
}
console.log(liczba);
document.write('<br>');
document.write('<br>');
document.write('<br>');
/*-----------------------------------------------------------*/

var tab = ['Julia', 'Krystian', 'Anna'];
for (i = 0; i < tab.length; i++) {
  document.write(tab[i] + ' ');
}
document.write('<br>');
document.write('<br>');
function p(a) {
  document.write(a + ' <br>');

}
tab.forEach(p)
function pokaz(wartosc,indeks){
  document.write(indeks + 1 + " - element tablicy wynosi: ");
  document.write(wartosc + '<br>');
}

tab.forEach(pokaz);
