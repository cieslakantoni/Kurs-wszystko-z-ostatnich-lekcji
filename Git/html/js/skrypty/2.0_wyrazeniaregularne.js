//true or false

let tekst = 'Piątek dasdasPiątek';
let regula =/test/i;
regula =/^test$/i;
regula =/test$/i;
regula =/^test/i;


regula = /[a]/;
regula = /[4]/;
regula = /[0-9]/;
regula = /[a-z]/;
regula = /[A-Z]/;
regula = /[A-z]/; //uwgaa na inne znaki np. [] , ^ , _ , ` ~
regula = /[A-Z]|[a-z]|[ąężćźśńół]/;

/*
 \s spacja, tabulacja lub znak nowego wiersza
 \S znak niebędący spacją, tabluacją lub znakiem nowego wiersza
*/
regula = /\s/;
regula = /\S/;
regula = /[a-z]\s/;

//mail wersja v1
// '+' oznacza 1 lub wiewcej znaków

regula = /[a-z]+@/;
//? jeden lub brak znaku

regula = /^mąk[a]?@/;
regula = /[a]{1}/;
regula = /^[a]{1}$/;
regula = /[a]{3}/;
regula = /[a]{2,}/;
regula = /^[a]{2,4}$/;

regula = /\//;
regula = /\s/; // \s spacja, tabulacja lub znak nowego wiersza
regula = /\s/; // \S znak niebędący spacją, tabluacją lub znakiem nowego wiersza

regula = /./; // '.' wymaga jednego znaku lub wiecej
regula =/../; // '..' wymagaja dwóch znaków lub wiecej
regula =/^..$/; // '...' wymaga tylko dwóch znaków
regula = /\./; // dla samej kropki '.'
regula =/\$/; //znak specjalny '$'

regula =/\.[a-z]{2,3}$/; // dla domen np wp.pl  *jakis teskt*'.'*domena*
/*
  /w znak będący litera, cyfra, znakiem podkreślenia
  /W znak niebedacy literą, cyfrą, znakiem podkreślenia
*/
regula =/\w/; //   /w znak będący litera, cyfra, znakiem podkreślenia
regula =/\W/; //  /W znak niebedacy literą, cyfrą, znakiem podkreślenia

/*
  \d znak będacy cyfrą
  \D znak niebedacy cyfrą
*/

regula =/\d/;  // \d znak będacy cyfrą
regula =/\D/; //  \D znak niebedacy cyfrą

//grupa

regula =/(Piątek){2}/;



let sprawdz = regula.test(tekst);

console.log(sprawdz);
