<?php
require ('admin/connect.php');

function dostepneUslugi($dost)
{
global $sql;

if ($dost=="usluga")
{
$ask="SELECT k.imie, k.nazwisko,p.imie, p.nazwisko,u.nazwa, r.dataRezerwacji, r.godzinaRezerwacji, r.status 
FROM uslugi u JOIN rezerwacje r ON u.id=r.uslugaID
JOIN klienci k ON k.id=r.klientID JOIN pracownicy p ON P.id=r.pracownikID 
WHERE r.Status='Potwierdzona' ";
}
       
 else {
    $ask="SELECT id, nazwa,cena,opis,czasTrwania, zdj FROM uslugi WHERE id IN (1,5,6,14)";
}

$wynik=$sql->query($ask);
$rows=$wynik->fetch_all(MYSQLI_ASSOC); //pobieranie wszyskich elementów
return $rows;
}

?>