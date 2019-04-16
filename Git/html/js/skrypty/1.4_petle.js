
for (var i = 1; i <= 25; i++){
  document.write(i+ " ")
}
//inkrementacja i++      i= i + 1

/* inicjalizacja  var i=1
warunek           <= 25
uaktualnianie     i++
*/


/*Napisz program który wyswietli liczby od 13 do 20 w petli for kazda liczba ma być zapisana w nowej lini*/

document.write("<hr>")
for (var i = 13; i <=20; i++) {
  document.write(i + "<br> ")

}
document.write("<hr>")



//Liczby podzielne przez 5 wymienione do 30

//1

  for (var i = 5; i <= 30 ; i +=5 ){
    document.write(i + " ")
  }


  document.write("<hr>")
//2

  for (i = 5; i <= 30; i++){
   if (i % 5 == 0);
   document.write (i + " ");
  }
  document.write("<hr>")

// Wypisz liczby parzyste z przedziału <10, 50> malejąco, po kazdej liczbie zrob przecinek i spacje, po ostatniej liczbie zrób kropke.

for (var i = 50; i >= 10; i--){
  if ( i % 2 == 0){
    if(i == 10)
    document.write(i + ".");
    else
    document.write(i + ", ");
  }
}
  document.write("<hr>")




/*Użytkownik podaje z klwaiatury dwie liczby, jeśli pierwsza bedzie mniejsa niz równa drugiej to wyświetl dane rosnąco podobnie jak w zadaniu powyżej. Jeśli druga liczba bedzie wieksza to wyświetl dane malejąco podobnie jak w zadaniu, powyżej.*/
/*var pliczba = parseFloat(prompt('Podaj pierwszą liczbe'));
var dliczba = parseFloat(prompt('Podaj drugą liczbe'));

  if (pliczba <= dliczba){
    for (i =pliczba; i <= dliczba; i++){
      if (i == dliczba)
      document.write (i + ".")
      else
      document.write (i + ", ")
    }
  }
  else{
    for (i =pliczba; i >= dliczba; i--){
      if (i == dliczba)
      document.write (i + ".")
      else
      document.write (i + ", ")
    }
  }
*/

//użytkownik podaje 3 liczby zmienno przecinkowe. Wyświetl na ekranie sume tych liczb i podaj czy liczba jest parzysta.


/*var suma =0;
var y;
  for (i = 1; i <=  3 ; i++){
    y = parseFloat(prompt("Podaj wartość nr " + i + ":"));
    suma += y;
  }
  document.write('Suma wynosi: ' + suma);
*/
/*var wys = prompt('Podaj liczbe która odpowiada za wysokosc choinki');
var znak = prompt('Z czego ma być zbudowana choinka');
    for (var i = 1; i <=wys ;i++)
    {

      for (var j = 1; j <=i; j++)
      document.write( znak );
      document.write("<br> ");

    }

*/

var x=1;

  for (var i = 1; i <=10 ;i++){
    for (var j = 1; j <=10 ; j++) {

      if (i == j)
      document.write('<span style="color:red">' + "X" + ' ' + '</span>');
      else{
        if (x<100 ){
          if (x % 2 == 0)
            document.write( x + ' ');
          else {
            document.write(0 + x + ' ');
            }}
          else{
            if (x % 2 ==0 )
              document.write (x + " ");
        }
      }

    x++;
  }
  document.write('<br>');
}

document.write ('<br>');
document.write ('<br>');
document.write ('<br>');
document.write ('<br>');


for (let i = 0; i <= 90; i=i+10) {
    for (let j = 1; j <= 10; j++) {
        if (i==(j*10)-10)
            document.write('<span style="color:red">' + 'X ' + '</span>')
        else
            document.write((i+j) + " ")
    }
    document.write("<br />")
}
