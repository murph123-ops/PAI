<?php
session_start();

$nazwa = $_POST['nazwa'];
$cena = $_POST['cena'];
$liczba = $_POST['liczba'];

$_SESSION['nazwa'] = $nazwa;
$_SESSION['cena'] = $cena;
$_SESSION['liczba'] = $liczba;

$_SESSION['koszyk'] = [
    'nazwa' => $_SESSION['nazwa'],
    'cena' => $_SESSION['cena'],
    'liczba' => $_SESSION['liczba']
];
echo "Nazwa produktu:" . $_SESSION['koszyk']['nazwa'] . '<br>';
echo "Cena produktu:" . $_SESSION['koszyk']['cena'] . '<br>';
echo "Liczba produktow:" . $_SESSION['koszyk']['liczba'] . '<br>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <br>
        <label for="nazwa">Nazwa produktu:</label><br>
        <input id="nazwa" type="text" name="nazwa"><br>

        <label for="cena">Cena produktu:</label><br>
        <input id="cena" type="number" name="cena"><br>

        <label for="liczba">Liczba produktow:</label><br>
        <input id="liczba" type="number" name="liczba"><br>

        <button type="submit">Dodaj do koszyka</button><br>
        <br>
    </form>
</body>
</html>