
//var let

/*


zmienna = 7;
zmienna - nazwa zmiennej
= operator przypisania
7 - wartosc zmiennej





*/
var Imie="Janusz"
var nazwisko;
nazwiko = "Kowalski"
document.write("Twoje imię: "+ Imie + "<br>");

var wiek = 21;

document.write("Twoj wiek: " + wiek);

console.log(wiek);

var x, y;
x = 10;
y = 7;
var suma = x + y;
var roznica = x - y;
document.write("<br> suma wynosi " + (x+y));
document.write("<br> suma wynosi " + roznica + "<br>");


x = 20;
y = 2;

var suma = x + y; //22
var roznica = x - y; //18

x = 19;
y = 2;

var iloraz = x / y; //9,5
var iloczyn = x * y; //38

var potega = Math.pow (2, 4);

var modulo = x % y;

console.log("wynik:" + modulo);
console.log("suma: " + suma + ", roznica: " + roznica +", iloraz: " + iloraz + ", iloczyn: " + iloczyn +", modulo: " + modulo);

//-------------------------------------------------------------------------------------------------------------------------------------------
// typy danych



var a = 10, b = " 10a ";

//window.alert(a+b);
alert(a+b);

console.log(typeof(a)); // type number
console.log(typeof(b)); //string

var prawda = true;
console.log(typeof(prawda)); //boolean


var nic = null;
console.log(typeof(nic)); //object

var pusta;
console.log(typeof(pusta)); //undefined

console.log(a + (a % 3) - 10);



var dziesietny = 11; //liczba w systemie dziesietnym, decymalny
var oktalny = 010; // ósemkowy, oktalny

/*
  010 => 8
  0 - system oktalny
  10 => 1 * 8^1 + 0 * 8^0 = 1 * 8 + 0 * 1 = 8 + 0 = 8

*/
var szestnastkowy = 0x10; // szestnastkowy, hexadecymalny
/*
 0x10 => 16
 0x - system szestnastkowy
 10 => 1 * 16^1 + 0 * 16^0 = 1 * 16 + 0 * 1 = 16 + 0 = 16

*/
console.log(dziesietny);
console.log(oktalny);
console.log(szestnastkowy);



/*var liczba1 = prompt("Podaj pierwszą liczbę");
console.log("Podana pierwsza liczba: " + liczba1);

var liczba2 = prompt("Podaj drugą liczbę")
console.log("Podana druga liczba: " + liczba2);


/*var liczbasuma = (liczba1 + liczba2);*/

/*suma = liczba1 + liczba2;

console.log("Suma podanych liczb: " +" "+ suma);
//----------------------------------------------------------------------------------------------------------------
//typy zmiennych
console.log(typeof(liczba1));
console.log(typeof(liczba2));

//zamiana zmiennych na typ liczbowy
liczba1 = parseInt(liczba1);
liczba2 = parseInt(liczba2);

console.log(typeof(liczba1));
console.log(typeof(liczba2));

suma = liczba1 + liczba2;
console.log("Suma podanych liczb: " + suma);*/


/* Suma liczb zmiennoprzecinkowych
  Parsefloat*/

  var liczba3 = prompt("Podaj pierwszą liczbę");
  console.log("Podana pierwsza liczba: " + liczba3);

  var liczba4 = prompt("Podaj drugą liczbę")
  console.log("Podana druga liczba: " + liczba4);



console.log(typeof(liczba3));
console.log(typeof(liczba4));

liczba3= parseFloat(liczba3);
liczba4= parseFloat(liczba4);


console.log(typeof(liczba3));
console.log(typeof(liczbn4));

suma = liczba3 + liczba4;
console.log(liczba3 + " + " + liczba4 + " = " + (liczba3 + liczba4));



//camel case - pierwsza mala, druga duża

var liczbaPierwsza = parseFloat(prompt("Podaj pierwszą liczbę: ","np: 3.5"));
var liczbaDruga = parseFloat(prompt("Podaj drugą liczbę: ","np: 5.5"));


suma = liczbaPierwsza + liczbaDruga;
document.write(liczbaPierwsza + " + " + liczbaDruga + " = " + suma);
console.log(liczbaPierwsza+liczbaDruga);

alert("Potęga " + potega);

//Zadanie 1
//napisz program który obliczy pole prostokąta, dane podaje użytkownik z klawiatury, liczby zmiennoprzecinkowe. Wynik wyświetl na ekranie w formacie: "Bok a":....., :"Bok b":....., pole wynosi: ..... cm^2 (2 w indeksie górnym)
//Zadanie 2
// W podobny sposób oblicz pole trójkąta, oraz koła. Math.pi


let boka = parseFloat(prompt("Podaj bok a"));
let bokb = parseFloat(prompt("Podaj bok b"));
let pole = boka * bokb;
document.write("<hr>Boka: "+ boka+ ", Bokb: " + bokb + ", pole wynosi: " + pole + "cm<sup>2</sup>");

//Podaj imie podaj nazwisko uzytkownika, wypisane  w klawiaturze


let imie =prompt("Podaj Imie");
let nazwisko2 =prompt("Podaj Nazwisko");
dane = '<br> Imie: <span style="color:red">' + imie;
dane += '</span> Nazwisko: <span style = "color:blue">' + nazwisko2 + "</span>";
document.write(dane);
