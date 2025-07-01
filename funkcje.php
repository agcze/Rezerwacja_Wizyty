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
$rows=$wynik->fetch_all(MYSQLI_ASSOC);
return $rows;
}

function admin_panel()
{

    global $sql;
      
    

    $ask2= "SELECT U.Nazwa AS Usługa, CONCAT(K.Imie,' ',K.Nazwisko) AS Klient, 
    U.Cena, r.DataRezerwacji as Data, r.GodzinaRezerwacji AS Godzina
    FROM rezerwacje R JOIN klienci K ON R.KlientID=K.id 
    JOIN uslugi U ON R.UslugaID=U.id"; 

$wynik=$sql->query($ask2);
$rows=$wynik->fetch_all(MYSQLI_ASSOC);
return $rows;
}



?>