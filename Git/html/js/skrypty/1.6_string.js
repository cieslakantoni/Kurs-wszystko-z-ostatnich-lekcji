let text = 'TEB - kurs programowania';

console.log(text);
console.log(text.length);


let dlugosc = text.length; //24
document.write('Długość tekstu:' + dlugosc);

document.write('<br>');
document.write('<br>');
let pierwszy = text.charAt(0); //T
document.write('Pierwszy znak: ' + pierwszy + '<br>');

let ostatni = text.charAt(text.length -1); //a
document.write('Ostatni znak: ' + ostatni  + '<br>');

console.log(text.charAt(9)); //s   - nie 10 bo od 0 liczymy


//ASCII

console.log(text.charCodeAt(0));//84  - T

document.write("<br>");

/*Sprawdz czy zmienna 'tekst' ma minimum jedną duża literę */


let tekst = 'jaNusZ niE'
let znak;

for (i = 0; i < tekst.length; i++) {
  znak = tekst.charCodeAt(i);
  if (znak >= 65 && znak <= 90) {
    document.write('Jest duża litera: ' +tekst.charAt(i) + '<br>');
    //break;
  }
}


let duze = tekst.toUpperCase();
console.log(duze);

let male = tekst.toLowerCase();
console.log(male);
document.write('<br>');

//Wprowadz swoje imie z klawaitury, przycisk - zatwierdz, na ekranie wyświetl to imie

function wyswietl(){
  //alert('test');
  let imieU = elImie.value;
  //document.write('Imię: ' + imieU);
  imieU = imieU.charAt(0).toUpperCase() + imieU.slice(1).toLowerCase();

  let kom = "Imię: " + imieU;
  elKomunikat.innerHTML = kom;


  //imię max. 10 znaków
  let wycinek = imieU.substr(0,10);
  kom += '<br> Imie z ograniczeniem do 10 znaków: ' + '<span style = "color:blue">'+wycinek+'</span>';
  elKomunikat.style.color ="red";
  elKomunikat.innerHTML = kom;

}
let elKomunikat = document.getElementById('Komunikat');
let elPrzycisk = document.getElementById('Przycisk');
let elImie = document.getElementById('Imie');

elPrzycisk.addEventListener('click', wyswietl);


//substring

let nazwisko = "Kowalski";
let wycinek1 = nazwisko.substr(4, 2);
console.log(wycinek1);
