var k = document.getElementById('komunikat');
k.innerHTML = '<span style="color:red">Janusz</span>';
//kolor
/*k.textContent = 'asdds';
//wszystko zapisuje nawet cudzysłow*/
//*użytkownik podaje z klawiatury swoją narodowość, jeśli poda polska, to wyświetli sie komunikat na stronie  w bloku o tresci Polska - najlepszy kraj. Poda niemcy, komunikat Niemcy - żal.pl. Inny kraj może warto spróbować.

var kraj = prompt('Podaj swoją narodowość');
if (kraj == 'Polska' || kraj == 'polska')
  k.textContent = 'Polska - Najlepszy kraj';
else if (kraj == 'Niemcy' || kraj == 'niemcy' || kraj == 'NIEMCY') {

 k.textContent ='Niemcy - żal.pl';
 alert('Niemcy');
}
else
   k.textContent ='Może warto spróbować';



//pole kwadratu
//Jeżeli użytkownik poda z klawiatury, prawidłowo długość boku To wyświetli sie wiadomosc
//"Pole wynosi ...cm^2 oraz obwód: ... cm^2"    Jeżeli dane beda błedne, to wyswietly sie wiadomosc o tresci: Błedne dane - w kolorze czerwonym.
//utwórz nowy blok strony do wyswietlenia komunikatu

var kkw = document.getElementById('komkwadrat')
var boka = parseFloat(prompt("Podaj bok a"));
var bokb = parseFloat(prompt("Podaj bok b"));
var pole = boka * bokb;
var obwod = 2 *  boka + 2 * bokb
var obwoda = 4 * boka
var obwodb = 4 * bokb
if (pole > 0){
 document.write("<hr>Boka: "+ boka+ ", Bokb: " + bokb + ", pole wynosi: " + pole + "cm<sup>2</sup>")
 document.write("<hr>Obwód= " + obwod + "cm<sup>2</sup>")
 document.write("<hr>Obwód na boku a = " + obwoda + "cm<sup>2</sup>")
 document.write("<hr>Obwód na boku b = " + obwodb + "cm<sup>2</sup>")

}else{
kkw.innerHTML ='<span style="color:red">Błedne dane</span>';
}
