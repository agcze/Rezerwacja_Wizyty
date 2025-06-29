<?php


if (isset($_REQUEST['nick']) && isset($_REQUEST['password']))  {
require_once ('connect.php');
$nick=$_REQUEST ['nick'];
$password=$_REQUEST['password'];

//zapytanie
$query=$sql->prepare("SELECT * FROM uzytkownik WHERE login=? LIMIT 1");
$query->bind_param("s",$nick); 
$query->execute();
$result= $query->get_result(); 


//jeśli login jest w bazie
$userRow=$result->fetch_assoc(); 

//konto nie istnieje
if ($userRow==NULL)
{
    echo "Błędny nick lub hasło <br>" ;
}
else {
     //konto istnieje

    if(password_verify ($password, $userRow['haslo'])){ 
     
      if   ($nick=='admin'){
           header ("Location:pulpit.php");
        exit();  
    } 
    
    else {
            $stmt = $sql->prepare("SELECT telefon FROM uzytkownik WHERE login = ? ");
            $stmt->bind_param("s", $nick);
            $stmt->execute();
            $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                session_start();
                $_SESSION['telefon'] = $row['telefon'];
                    
                header ("Location:../user/user_pulpit.php");

            }


     
    } 
    
}
}

}
?>