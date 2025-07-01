<?php
require ("funkcje.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integr>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/rezerwacje.css">
  <title>Salon fryzjerski</title>
</head>

<body>
  <script src="script.js"></script>
  <!--NAGŁÓWEK-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="">STRONA GŁÓWNA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="smoothScroll('#services')">USŁUGI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="smoothScroll('#reservation')">REZERWACJE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin/logowanie.php">LOGOWANIE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rejestracja.php">UTWÓRZ KONTO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container h-75 d-flex align-intems-center">
      <div class="row">
        <div class="col-12">
          <h1>SALON FRYZJERSKI</h1>
        </div>
        <div class="col-12">
          <div class="row mt-5 d-flex">
            <button class="col-lg-5 col-md-10 col-sm-20 m-4 font-weight-bold">
              <a class="nav-link" onclick="smoothScroll('#services')">USŁUGI</a>
            </button>
            <button class="col-lg-5 col-md-10 col-sm-20 m-4 font-weight-bold">
              <a class="nav-link" onclick="smoothScroll('#reservation')">REZERWACJE</a>
            </button>
          </div>
        </div>
      </div>
  </header>
  <!--header-->
  <!-- dostępne usługi-->
  <section id="services">
    <div class="container-fluid p-5">
      <div class="row"><!--nowy wiersz-->
        <div class="col-12"> <!--div na całą szer strony-->
          <h1 class="text-center p-5 font-weight-bold">POPULARNE USŁUGI</h1>
        </div>
      </div>
      <!--karty usług-->
      <div class="row">
        <!--<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
          <div class="card">
            <img src="image/usluga/scissors.jpg" class="card-img-top" alt="uslugi">
            <div class="card-body">
              <h5 class="card-title text-center">Strzyżenie</h5>
              <p class="text-center font-weight-bold">od 50zł</p>
              <button name="rezerwuj" class="btn col-12" onclick="rezerwuj(1)">REZERWUJ</button>
            </div>
          </div>
        </div>-->

        <?php
        $rows=dostepneUslugi("");
        foreach ($rows as $r) {
          echo '<div class="col-lg-3 col-md-6 col-sm-12 mt-3">';
          echo '<div class="card">';
          echo '<img src="image/usluga/'.$r['zdj'].'" class="card-img-top" alt="uslugi">';
          echo  '<div class="card-body">';
          echo   '<h5 class="card-title text-center">'.$r['nazwa'].'</h5>';
          echo    '<p class="text-center font-weight-bold"> od '.$r['cena'].'zł</p>';
          echo'<button class="btn col-12" onclick="rezerwuj('.$r['id'].')">REZERWUJ</button>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
        ?>

        <!--<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
          <div class="card">
            <img src="image/usluga/Palette.jpg" class="card-img-top" alt="uslugi">
            <div class="card-body">
              <h5 class="card-title text-center">Koloryzacja</h5>
              <p class="text-center font-weight-bold">od 150zł</p>
              <button name="rezerwuj" class="btn col-12" onclick="rezerwuj(4)">REZERWUJ</button>
            </div>
          </div>
        </div>-->

       

      <!--<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
          <div class="card">
            <img src="image/usluga/hair.png" class="card-img-top" alt="uslugi">
            <div class="card-body">
              <h5 class="card-title text-center">Fryzury okolicznościowe </h5>
              <p class="text-center font-weight-bold">od 250zł</p>
              <button name="rezerwuj" class="btn col-12" onclick="rezerwuj(14)">REZERWUJ</button>
            </div>
          </div>
        </div>-->

        <!--<div class="col-lg-3 col-md-6 col-sm-12 mt-3">
          <div class="card">
            <img src="image/usluga/man_hair.jpg" class="card-img-top" alt="uslugi">
            <div class="card-body">
              <h5 class="card-title text-center">Barber</h5>
              <p class="text-center font-weight-bold">od 40zł</p>
              <button name="" class="btn col-12" onclick="rezerwuj(15)">REZERWUJ</button>
            </div>
          </div>
        </div>-->


      </div>
    </div>
  </section>

  <!--REZERWACJE-->
  <section id="reservation">
    <div class="container-fluid">
      <h1 class="text-center p-5 font-weight-bold">ZAREZERWUJ TERMIN</h1>
      <div class="row">
        <div class="col-12 d-flex justify-content-center p-5 text gold">
          <form action="rezerwacje.php" method="POST">
            <div class="row">
              <div class="form-group">
                <label for="imie">Imię</label>
                <input type="text" class="form-control" name="imie"  placeholder="Wpisz imię" required>
              </div>

              <div class="form-group">
                <label for="nazwisko">Nazwisko</label>
                <input type="text" class="form-control" name="nazwisko" id="nazwisko" placeholder="Wpisz nazwisko"
                  required>
              </div>

              <div class="form-group">
                <label for="tel">Telefon</label>
                <input type="text" class="form-control" name="tel" id="tel" placeholder="Wpisz telefon" required>
              </div>
            
            </div>
            
      

                <div class="form-group">
                <label for="services">Usługa</label>
                  <select name="usluga" class="from-control" id="usluga">
               <!-- <optgroup label="Strzyżenie" >-->
                  <option value="1"  >Strzyżenie męskie</option>
                  <option value="2">Strzyżenie damskie</option>
                  <option value="3" >Strzyżenie dziecięce</option>
              <!--  </optgroup>-->
                <!--  <optgroup label="Koloryzacja" >-->
                  <option value="4"  >Koloryzacja włosy krótkie</option>
                  <option value="5">Koloryzacja włosy długie</option>
                  <option value="6">Baleyage</option>
                  <option value="7">Pasemka</option>
               <!-- </optgroup>-->
               <!--   <optgroup label="Pozostałe uslugi"  >-->
                  <option value="8">Prostowanie włosów</option>
                  <option value="9">Trwała ondulacja </option>
                  <option value="10">Maska na włosy </option>
                  <option value="11">Przepięcia i stylizowanie włosów </option>
                  <option value="12">Mycie włosów z masażem </option>
                  <option value="13">Podcinanie końcówek </option>  
               <!-- </optgroup>-->
                  <option value="14" >Fryzury okolicznościowe</option>
                  <option value="15" >Barber</option>
                </select>
              </div>
           

            <div class="row">
              <div class="form-group">
                <label for="data">Wybierz termin wizyty</label>

                <input type="date" class="form-control" name="data" placeholder="yyyy-mm-dd" 
                value="" min="1997-01-01" max="2030-12-31"  id="data" required>
                
              </div>

              <div class="form-group">
                <label for="hours">Wybierz Godzinę</label>
                <input type="datetime" class="form-control" name="godz" id="godz" required>
              </div>

            </div>

            <div class="row">
              <div class="form-group">
                <label for="salon">Wybierz salon</label>
                <select name="salon" class="from-control" id="salon">
                  <option value="1">Salon fryzjerski u Grażyny</option>
                  <option value="2">Zetnij włosa</option>
                  <option value="3">Fryz</option>
                  <option value="4">Złote Nożyczki</option>
                  <option value="5">Fryzury na Fali</option>
                  <option value="6">Fryzjerski Zakątek</option>
                  <option value="7">Mistrzowie Stylu</option>
                  <option value="8">Fryzjerska Oaza</option>
                  <option value="9">Włosowe Cuda</option>
                  <option value="10">Czarodziejskie Nożyczki</option>
                  <option value="11">Fryzjerska Przyjemność</option>
                  <option value="12">Tnij włos</option>
                  <option value="13">Dancing Hair</option>
                  <option value="14">Fryzjerskie cuda</option>
                  <option value="15">Fryzury w ruchu</option>
                  <option value="16">Czarujące włosy</option>
                  <option value="17">Stylowe loksy</option>
                  <option value="18">Skręt i cięcie</option>
                  <option value="19">Zepnij włosa</option>
                  <option value="20">Eleganckie nożyczki</option>
                </select>
              </div>
              </div>
              <input type="submit" value="Rezerwuj">
        </div>
        
      </div>
      
    </form>
  </div>
  </div>

  </div>
  </section>


</body>

</html>