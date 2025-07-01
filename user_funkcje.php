<?php
require ('../admin/connect.php');
require ('../admin/login.php');

global $sql;
session_start();





function user_panel()
{
        global $sql;

     $ask1 = $sql->prepare("
        SELECT U.Nazwa AS Usługa, CONCAT(K.Imie,' ',K.Nazwisko) AS Klient, U.Cena, r.DataRezerwacji as Data, r.GodzinaRezerwacji AS Godzina FROM rezerwacje R JOIN klienci K ON R.KlientID=K.id JOIN uslugi U ON R.UslugaID=U.id
        JOIN uzytkownik uz ON k.telefon=uz.telefon WHERE uz.telefon= ?
    ");

    $ask1->bind_param("s",$_SESSION['telefon']);

    $ask1->execute();

   
    $wynik1 = $ask1->get_result();
    

$rows=$wynik1->fetch_all(MYSQLI_ASSOC);
return $rows;
    




    

    }





?>