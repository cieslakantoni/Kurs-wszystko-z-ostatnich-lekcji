/*
Użytkownik wprowadza w formularzu kod pocztowy
sprwadz wyrażeniem regularnym czy wprowadził prawidłowe dane
no. 60-120, 61120  */


let elkod, sprawdz;
let elprzycisk = document.getElementById('przycisk');
let elkomunikat = document.getElementById('komunikat');
let regula =/^\d{2}-?\d{3}$/;

function tekstt() {
  elkod = document.getElementById('kod').value;
  sprawdz = regula.test(elkod);;
  if (sprawdz){

    elkomunikat.style.color ='green';
    elkomunikat.innerHTML ='Prawidłowy kod pocztowy';
  }else{

    elkomunikat.style.color = 'red';
    elkomunikat.innerHTML ='Błędny kod pocztowy';
  }
}
przycisk.addEventListener('click', tekstt);
