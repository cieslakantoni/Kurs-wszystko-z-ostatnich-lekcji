/*
const pi = Math.PI; //3.141592653589793
let zaokraglij = Math.round(3.2); // w dół = 3
let zaokraglij1 = Math.round(3.5); // w górę = 4
let potega = Math.pow(2,4); // 16
let pierwiastek = Math.sqrt(16); // 4
let bezwzgledna = Math.abs(-4.5); // 4.5
let calkowita = Math.ceil(5.1); // 6
let calkowita1 = Math.floor(5.999); //55
let min = Math.min(1, 2.4, -4, 5); //-4
let max = Math.max(1, 2.4, -4, 5); // 5
let losuj = Math.random(); //0.0 - 1.0        random - 0.1438626372895202


console.log(pi);
console.log(zaokraglij);
console.log(zaokraglij1);
console.log(potega);
console.log(pierwiastek);
console.log(bezwzgledna);
console.log(calkowita);
console.log(calkowita1);
console.log(min);
console.log(max);
console.log(losuj);


/* Zadanie, wylosuj liczbe całokwią z przedziału [2,10] */
/*
let minimalna = 2;
let maksymalna = 10;
let wylosuj = Math.floor(Math.random() * (maksymalna - minimalna + 1))+ minimalna;
console.log(wylosuj);
*/
//Użytkownik wpisuje dwie liczby które są przedziałem,
/*let liczba1;
let liczba2;

function wylosuj(liczba1,liczba2){
  liczba1 = Math.ceil(liczba1);
  liczba2 = Math.floor(liczba2);
  if (liczba1 > liczba2) {
    let pom = liczba1;
    liczba1 = liczba2;
    liczba2 = pom;

  }
  return Math.floor(Math.random() * (liczba2 - liczba1 + 1))+ liczba1;
}

liczba1 =prompt('Podaj liczbe minimalna: ');
liczba2 =prompt('Podaj liczbe maksymalna: ');

console.log(wylosuj(liczba1, liczba2));

//wylosuj na ekranie tyle liczb z przedziału ile poda użytkownik z klawiatury
//wyswietl je w formacie
// liczba 1:... liczba2:... liczba3:... itd.

document.write("Minimalna: "+ liczba1 + '<br>');
document.write("Maksymalna: "+ liczba2 + '<br>');
let ile;
do {
 ile = Math.floor(prompt('Ile wylosować liczb?'));
} while (isNaN(ile));

for (var i = 0; i < ile; i++) {

  let x = i +1;
  let wylosowana = wylosuj(liczba1, liczba2);

document.write('Liczba' + x + ": " + wylosowana + '<br>');
*/
