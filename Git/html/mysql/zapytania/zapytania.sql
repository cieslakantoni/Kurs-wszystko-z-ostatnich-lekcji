SELECT * FROM `pracownik` ORDER BY aktywny, imie
UPDATE `pracownik` SET aktywny='zablokowany'
UPDATE `pracownik` SET aktywny='aktywny' where id in (1, 4, 6)
SELECT * FROM `pracownik` WHERE miasto='Poznań'
SELECT * FROM `pracownik` WHERE miasto='Poznań' LIMIT 3
ALTER TABLE `samochody` ADD `cena` DECIMAL(6,2) NULL AFTER `rejestracja`;
SELECT min(cena) as 'Minimalna cena',rejestracja from samochody
SELECT max(cena) as 'Maksymalna cena',rejestracja from samochody
SELECT AVG(cena) as 'Średnia cena' from samochody
SELECT SUM(cena) as 'Średnia cena' from samochody
SELECT * FROM `marka` WHERE marka LIKE 'F'
SELECT * FROM `marka` WHERE marka LIKE 'F___'
SELECT * FROM `pracownik` WHERE nazwisko IN (SELECT nazwisko FROM pracownik WHERE nazwisko LIKE 'K%')
SELECT * FROM `pracownik` WHERE nazwisko IN (SELECT nazwisko FROM pracownik WHERE nazwisko LIKE 'K%') and NOT aktywny='zablokowany'
SELECT * FROM samochody WHERE cena not BETWEEN 100000 AND 10000000
SELECT * FROM `pracownik` WHERE wiek BETWEEN '1980-01-01' and '1990-01-30' ORDER BY miasto
SELECT * FROM `pracownik` WHERE wiek BETWEEN '1980-01-01' and '1999-01-30' ORDER BY miasto
SELECT CONCAT('Imię: ',imie 'Nazwisko: ',nazwisko, 'Miasto: ',miasto) AS 'Informacje o pracowniku' FROM pracownik where id=1

Wczytywanie danych z połączeń pomiedzy tabelami
SELECT pracownik.imie, pracownik.nazwisko, samochody.cena, samochody.rejestracja FROM pracownik INNER JOIN samochody ON pracownik.id=samochody.idPracownika

SELECT pracownik.imie, pracownik.nazwisko, samochody.cena, samochody.rejestracja FROM pracownik LEFT OUTER JOIN samochody ON pracownik.id=samochody.idPracownika


AND samochody INNER JOIN marka ON samochody.idPracownika=marka.idmarka

SELECT pracownik.imie, pracownik.nazwisko, samochody.rejestracja, samochody.cena, marka.marka FROM pracownik INNER JOIN samochody ON pracownik.id=samochody.idPracownika INNER JOIN marka ON samochody.idMarki=marka.idmarka

SELECT p.miasto, s.rejestracja, m.marka, mo.model FROM pracownik as p INNER JOIN samochody as s ON p.id=s.idPracownika INNER JOIN marka as m ON s.idMarki=m.idmarka INNER JOIN model as mo ON m.idmarka=mo.idmarka WHERE m.marka='Ferrari' AND mo.model='123321' ORDER BY p.miasto DESC

SELECT p.imie FROM pracownik as p UNION SELECT s.rejestracja FROM samochody as s

SELECT COUNT(p.id) as 'Liczba pracowników', p.miasto FROM pracownik as p GROUP BY miasto

SELECT m.marka, CONCAT(COUNT(mo.model),' szt.') as 'Liczba Modeli' FROM model as mo INNER JOIN marka as m ON m.idmarka=mo.idmarka GROUP BY marka

Wczytywanie z danych, modele samochodów i ich liczbę, sortujemy je od najwiekszej ilosci Modeli
SELECT m.marka, CONCAT(COUNT(mo.model),' szt.') as 'Liczba Modeli' FROM model as mo INNER JOIN marka as m ON m.idmarka=mo.idmarka GROUP BY marka HAVING COUNT(mo.model) >= 2  ORDER BY COUNT(mo.model) DESC
