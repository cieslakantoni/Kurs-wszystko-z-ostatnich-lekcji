/*Spradz czy hasło spełnia wymagania:
-min. 8 znaków
-min. 1 duża litera
-min. 1 mała litera
-min. 1 znak specjalny
-min. 1 cyfra
Sprawdanie po kazdym wpisanym znaku (bez przycisku - live)
Lista wymagań na stronie (wykreslane - spełnione wymagania i ziel kolor)
sprawdzanie poprawnosci dwóch haseł, na koncu przycisk zatwierdzający hasła.

 */
elhaslo = document.getElementById('haslo');
elhaslo2 = document.getElementById('haslo2');
eldlugosc = document.getElementById('dlugosc');
elcyfra = document.getElementById('cyfra');
elduzalitera = document.getElementById('duzalitera');
elmalalitera = document.getElementById('malalitera');
elznak = document.getElementById('znak');
elkomunikat = document.getElementById('komunikat');
elprzycisk = document.getElementById('przycisk');

var cyfral = /\d/;
var dlugoscl = /......../;
var duzaliteral = /[A-Z]/;
var malaliteral = /[a-z]/;
var znakl = /\W/;


var cyfra, pass;

function sprawdz(){
  pass = elhaslo.value
  cyfra = cyfral.test(pass);
  dlugosc = pass.length;
  duzalitera = duzaliteral.test(pass);
  malalitera = malaliteral.test(pass);
  znak = znakl.test(pass);


  if (cyfra) {
    elcyfra.style.color = 'rgba(21, 224, 122, 0.36 )';
    elcyfra.innerHTML = '<del>-min. 1 cyfra</del>';
  }else {
    elcyfra.style.color = 'black';
    elcyfra.innerHTML = '-min. 1 cyfra';
  }

  if (dlugosc >= 8) {
        eldlugosc.style.color = 'rgba(21, 224, 122, 0.36 )';
        eldlugosc.innerHTML = '<del>-min. 8 znaków</del>';
  }else {
        eldlugosc.style.color = 'black';
        eldlugosc.innerHTML = '-min. 8 znaków';
    }

  if (duzalitera) {
            elduzalitera.style.color = 'rgba(21, 224, 122, 0.36 )';
            elduzalitera.innerHTML = '<del>-min. 1 duża litera</del>';
    }else {
            elduzalitera.style.color = 'black';
            elduzalitera.innerHTML = '-min. 1 duża litera';
    }

  if (malalitera) {
            elmalalitera.style.color = 'rgba(21, 224, 122, 0.36 )';
            elmalalitera.innerHTML = '<del>-min. 1 mała litera</del>';
    }else {
            elmalalitera.style.color = 'black';
            elmalalitera.innerHTML = '-min. 1 mała litera';
    }
    if (znak) {
              elznak.style.color = 'rgba(21, 224, 122, 0.36 )';
              elznak.innerHTML = '<del>-min. 1 znak specjalny</del>';
      }else {
              elznak.style.color = 'black';
              elznak.innerHTML = '-min. 1 znak specjalny';
      }
    if ( cyfra && dlugosc >= 8 && duzalitera && malalitera && znak)
    {
        elkomunikat.style.color = 'lightgreen';
        elkomunikat.innerHTML = '<h1>Poprawne hasło</h1>';
        elhaslo2.disabled = false;
    }else{
          if(dlugosc >= 1){
            elkomunikat.style.color = 'red';
            elkomunikat.innerHTML = 'Hasło nie spełnia wymagań';
          }else{
            elkomunikat.innerHTML = '';
          }
          elhaslo2.disabled = true;
      }
}
  function pass(){
     let haslo1 = elhaslo.value;
     let haslo2 = elhaslo2.value;

     if (haslo1 == haslo2){
       elprzycisk.disabled = false;
     }else{
     elprzycisk.disabled = true;
   }
  }

  function zatwierdz(){
    let haslo1 = elhaslo.value;
    let haslo2 = elhaslo2.value;
  if (haslo1 == haslo2){
    elkomunikat.innerHTML= 'Hasło zatwierdzone';
    elkomunikat.style.color = 'black';
    elkomunikat.className = 'poprawne';
    elhaslo.value = '';
    elhaslo2.value = '';
    elhaslo.disabled = true;
    elhaslo2.disabled = true;
    elprzycisk.disabled = true;
  }else{
    elkomunikat.innerHTML= 'Hasła nie są identyczne';
    elkomunikat.style.color = 'black';
    elkomunikat.className = 'niepoprawne';
    elhaslo.value = '';
    elhaslo2.value = '';
    elhaslo.focus();
  }
  }
elprzycisk.addEventListener('click', zatwierdz);

elhaslo.addEventListener('keyup', sprawdz);
elhaslo2.addEventListener('keyup', pass);
