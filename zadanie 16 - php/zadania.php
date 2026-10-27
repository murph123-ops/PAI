<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- zadanie 1 -->
    <form method="GET">
        <input id="name" type="text" name="name">Imie</input><br>
        <button type="submit">Wyslij</button><br>
    </form>
    <!-- zadanie 2 -->
    <form method="POST">
        <input id="wiek" type="number" name="wiek">Wiek</input><br>
        <button type="submit">Wyslij</button><br>
    </form>
    <!-- zadanie 3 -->
    <form method="POST">
        <input id="nazwa" type="text" name="nazwa">Nazwa produktu</input><br>
        <input id="cena" type="number" name="cena">Cena jednego produktu</input><br>
        <input id="liczba" type="number" name="liczba">Liczba zakupionych sztuk</input><br>
        <button type="submit">Oblicz</button><br>
    </form>
</body>
</html>
<?php

// zadanie 1 

if(isset($_GET['name'])){
    echo "Twoje imie to:" . $_GET['name'] . "<br>";
}

// zadanie 2

if(isset($_POST['wiek'])){
    echo "Twoje wiek to:" . $_POST['wiek'] . "<br>";
}


// zadanie 3

$nazwa = $_POST['nazwa'];
$cena = $_POST['cena'];
$liczba = $_POST['liczba'];

if(isset($_POST['nazwa']) && isset($_POST['cena']) && isset($_POST['liczba'])){
    $wynik = $cena * $liczba;
    echo "Nazwa produktu:" . $nazwa .  "<br>" . "Cena jednostkowa:" . $cena .  "<br>"  ."Liczba sztuk:" . $liczba . "Calkowity koszt zakupow:" . $wynik; 
}
?>