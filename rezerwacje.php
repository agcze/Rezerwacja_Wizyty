
<link rel="stylesheet" href="css/rezerwacje.css">
<?php
require ('admin/connect.php');
try{
    global $sql;

    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $tel=$_POST['tel'];
    $usluga=$_POST['usluga'];
    $salon=$_POST['salon'];
    $data=$_POST['data'];
    $godz=$_POST['godz'] ; 


 $sql->begin_Transaction();

//dodanie klienta
$query1="INSERT INTO Klienci (Imie,Nazwisko,Telefon) VALUES (?,?,?)";
$ask1=$sql->prepare($query1);
$ask1->bind_param('sss', $imie,$nazwisko,$tel);
$ask1->execute();
$last_id = $sql->insert_id;


//losowanie pracownika

$query2 =("SELECT p.id FROM pracownicy p JOIN salon s ON p.salon=s.id  WHERE p.salon =?
 ORDER BY RAND() LIMIT 1");
 $ask2=$sql->prepare ($query2);
 $ask2->bind_param ('i', $salon);
 $ask2->execute();
 $wynik= $ask2->get_result();
 if ($wynik->num_rows>0)
{
    $prac_id=$wynik->fetch_assoc(); 
     
        $prac=$prac_id["id"];
}

 


//dodanie rezerwacji
$query3="INSERT INTO Rezerwacje (KlientID,SalonID,PracownikID,UslugaId,DataRezerwacji,GodzinaRezerwacji,Status) VALUES
(?,?,?,?,?,?,'Potwierdzona')";
$ask3=$sql->prepare($query3);
$ask3->bind_param ('iiiiss',$last_id,$salon,$prac,$usluga,$data,$godz);
$ask3->execute();


echo "Rezerwacja dodana i automatycznie potwierdzona";

$query4= "SELECT CONCAT(K.Imie,' ',K.Nazwisko) AS Klient, 
S.Nazwa AS salon, CONCAT(P.Imie,' ',P.Nazwisko) AS pracownik, 
U.Nazwa AS Usługa, r.DataRezerwacji as Data, r.GodzinaRezerwacji AS Godzina, r.Status 
FROM rezerwacje R JOIN klienci K ON R.KlientID=K.id 
JOIN pracownicy P ON R.PracownikID=P.id 
JOIN salon S ON S.id=P.Salon 
JOIN uslugi U ON R.UslugaID=U.id 
ORDER BY r.ID DESC LIMIT 1 ";
$rezultat=mysqli_query($sql,$query4);
if (mysqli_num_rows($rezultat)>0)
{
    echo " <br> Twoja rezerwacja: </br>";
echo "<table>";
	echo " <tr>";
	echo "<th> Klient</th>";
	echo "<th> Salon </th>";
	echo "<th> Pracownik </th>";
	echo "<th> Usługa </th>";
	echo "<th> Data rezerwacji </th>";
	echo "<th> Godzina rezerwacji </th>";
    echo "<th> Status rezerwacji </th>";
	echo " </tr>";
	


    while ($row = mysqli_fetch_assoc($rezultat)) {
        echo " <tr>";
		echo "<td>".$row['Klient'].' '."</td>";
		echo "<td>".$row['salon'] ."</td>";
		echo "<td>".$row['Pracownik']."</td>";
		echo "<td>".$row['Usługa']."</td>";
		echo "<td>". $row['Data']. "</td> ";
		echo "<td>". $row['Godzina']. "</td> ";
        echo "<td>". $row['Status']. "</td> ";
		echo "</tr>";
        echo "</table>";   
    }
}
$sql->commit();
}


catch (Exception $e)
{
    
    $sql->rollBack();
    echo "Błąd:". $e->getMessage();
}


?>













