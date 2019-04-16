/*
//Tworzenie tablicy za pomoca kolorów

var kolory = ['red', 'green', 'blue','yellow'];
console.log(kolory[0]);



//Tworzenie tablicy za pomoaca konsturktora Array
var samochody = new Array('BMW', 'Mercedes', 'Audi', 'Fiat');
console.log('Ostatni element tablicy, przed dodaniem Ferrari: ' + samochody[samochody.length -1]);
samochody.push('Ferrari');
console.log('Ilość elementów w tablicy: ' + samochody.length);
console.log(samochody.length);
console.log('Ostatni element tablicy, po dodaniu Ferrari: ' + samochody[samochody.length -1]);


//tablica wielowymiarowa
var tab = new Array(
  new Array('Janusz', 'Nowak', 'Poznań'),
  new Array('Anna', 'Kowalska', 'Warszawa'),
  new Array('Ola', 'Kowal', 'Kraków')
);

console.log(tab[1]); // wyswietlenie 1 tablicy
console.log(tab[2][0]); // wyswietlenie 1 elementu tablicy



/*Utwórz tablice wielowymiarowa, w która bedzie zawierała trzech piłkarzy AC Milan
Wyświetl z tablicy Krzysztofa Piątka w formacie:
Imię:
Nazwisko:
Narodowość:
*/
/*
var tab = new Array(
  new Array('Krzysztof', 'Piątek', 'Polska'),
  new Array('Jan', 'Kowalski', 'Rosja'),
  new Array('Adam', 'Kowal', 'Polska')
);

document.write('Imię: ' + tab[0][0] +'<br>');
document.write('Nazwisko: ' + tab[0][1] + '<br>');
document.write('Narodowość: ' + tab[0][2] + '<br>');


// jednowymiarowa z sortowaniem
var imiona = ['Zosia','Julia','Agata','Patrycja'];
console.log(imiona);
var posortowane = imiona.sort();
console.log(posortowane);
var niesortowane = imiona.reverse();
console.log(niesortowane);


console.log(niesortowane.indexOf('Julia')); //2
console.log(niesortowane.indexOf('Juliaa'));//-1


niesortowane.pop();
console.log(niesortowane);


niesortowane.push('Krystyna');
console.log(niesortowane);

niesortowane.unshift('pierwszy');
console.log(niesortowane);


var liczby = [1, 3, 30, 150, -10, 1400];
console.log(liczby);
var liczbySort = liczby.sort();
console.log(liczbySort);

liczby.sort(function(a,b){
  return (a-b);
}
);
console.log(liczby);

/* Utwórz formularz z loginem(text) i hasłem(password)
  Zapisz dane w tablicy.
  Użytkownik wybiera również kolor, w jakim login i hasło ma być wyświetlony, w nagłówku 3 stopnia (<h3>)
  Wywietl dane w formacie
  Login: ..., Hasło: ..., kolor: ...
*/


var login, kolor, pass;
var przycisk = document.getElementById('przycisk');
var elkomunikatlogin = document.getElementById('komunikatlogin');

var tablogin = new Array();

  function zapisz(){

    var login = document.getElementById('login').value;
    var pass = document.getElementById('pass').value;
    kolor = document.getElementById('kolor').value;
    /*tablogin.push(login);
    tablogin.push(pass);*/
    tablogin.push(

      new Array(login, pass, kolor)
    );

    console.log(tablogin);
    /*  elkomunikatlogin.innerHTML = ('<h3><span style=color:'+kolor+'>' + login + '</span></h3><br>' );
      elkomunikatlogin.innerHTML = ('<h3><span style=color:'+kolor+'>' + pass + '</span></h3>' );
      */
      //wyswietl = tablogin.length; //ilosc osob w tablicy;
      //wyswietl = tablogin[0].length; // ilosc pól dla konkretnej osoby w tablicy
      let wyswietl = ' ';
      for (let i = 0; i < tablogin.length; i++) {
        for (let j = 0; j < tablogin[i].length; j++) {
          switch (j) {
            case 0:
            wyswietl += '<h3>Login: ';
              break;
                case 1:
                wyswietl += ' , Hasło: ';
                  break;
                  case 2:
                      wyswietl += ' , kolor: ';
            default:

          }
           wyswietl += '<span style=color:'+tablogin[i][2]+'>' + tablogin[i][j] + '</span>';
        }
        wyswietl += '</h3>';
      }



      elkomunikatlogin.innerHTML = wyswietl;




  }



    przycisk.addEventListener('click', zapisz);
