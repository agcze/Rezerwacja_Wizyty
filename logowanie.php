<!doctype html>
<? require_once ('login.php'); 

?>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" >
        <title>Panel logowania</title>
  </head>
  <body>
  <form action="login.php" method="POST">
        <div class="col-12 mt-5">
        <h1 class="text-center font-weight-bold">LOGOWANIE</h1> 
    </div>
     
    <div class="col-12 d-flex justify-content-center mt-4 ml-3">
          <label for ="nick" class="sr-only" >Nick</label>
            <input type="text" name="nick" id="nick" placeholder="Podaj nick">
    </div>
        
    <div class="col-12 d-flex justify-content-center mt-4 ml-3">
          <label for ="password" class="sr-only">Hasło </label>
           <input type="password" name="password" id="password" placeholder="Podaj hasło">
</div>

<div class="col-12 d-flex justify-content-center mt-4 ml-3">
            <input type="submit" value="Zaloguj" class="btn btn-secondary">
</div>     

          <div class="col-12 d-flex justify-content-center mt-4 ml-3">
          <a href='../index.php' class="btn btn-secondary">Powrót do strony głównej</a>
        </div>


    </form>

    
  </body>
</html>