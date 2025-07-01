<?php

require ('user_funkcje.php');
?>
<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Panel użytkownika</title>
  </head>
  <body>
   <div class="col-12">
    <h1 class="text-center font-weight-bold p-5">REZERWACJE</h1>
    <div class="text-center">
        <a href="../admin/logowanie.php" class="btn btn-primary">POWRÓT</a> | <a href="../admin/wyloguj.php" class="btn btn-primary">WYLOGUJ</a>
    </div>

   <div class="container mt-5">
        <div class="row">
            <table class="table table-striped w-100">
               <thead>
                  <tr>
                      <th scope="col" style="width: 50px">Pozycja</th>
                      <th scope="col">Usługa</th>
                      <th scope="col">Klient</th>
                      <th scope="col">Cena</th>
                      <th scope="col">Data</th>
                      <th scope="col">Godzina</th>
                  </tr>
                </thead>
                <tbody> 
               
               <?php
                  
                       $rows=user_panel();

                       if ($rows>0)
                       {

                    for ($i=0; $i<count($rows); $i++)
                    {
                        echo '<tr>';
                         echo '<th scope="row">'.($i+1).'</th>';
                        echo '<td>'.$rows[$i]['Usługa'].'</td>';
                        echo '<td>'.$rows[$i]['Klient'].'</td>';
                        echo '<td>'.$rows[$i]['Cena'].'</td>';
                        echo '<td>'.$rows[$i]['Data'].'</td>';
                        echo '<td>'.$rows[$i]['Godzina'].'</td>';
                        echo '</tr>';
                    }
                  } 
                  if (count($rows) == 0) 
                  {
                  echo '<tr><td colspan="6">Nie masz jeszcze rezerwacji. 
                    Zarezerwuj swoją pierwszą wizytę. </td></tr>';
                  }
                     
                        ?>


                </tbody>
              </table>
                       </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>