<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <title>Rejestracja użytkownika</title>
</head>
<body>
    <h2>Rejestracja</h2>
    <form action="konto.php" method="POST">
        <label for="login">Nazwa użytkownika:</label><br>
        <input type="text" id="nick" name="nick" required><br><br>

        <label for="password">Hasło:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="telefon">Telefon:</label><br>
        <input type="telefon" id="telefon" name="telefon" required><br><br>      

        <button type="submit">Utwórz konto</button>
    </form>
</body>
</html>