<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./" method="GET">  
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name"><br>

        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"><br>

        <label for="ticket">Rodzaj biletu:</label>
        <select name = "ticket">
            <option value = "normalny">Normalny</option>
            <option value = "ulgowy">Ulgowy</option>
        </select>

        <input type="submit" value="Wyślij">
    </form>

</body>
</html>

<?php
echo "Czesc," . $_GET['name'] .  "!" ."<br>";

echo "Twoj wiek:" . $_GET['age'] ."<br>";

echo "Wybrany bilet:" . $_GET['ticket'] ."<br>";



$ticket = $_GET['ticket'];
$ticketPrice = 0;
if($ticket == 'normalny' && $_GET['age'] > 7){
    $ticketPrice = 30;  
}else if($ticket == 'ulgowy'){
    $ticketPrice = 15;
}else if($_GET['age'] <= 7){
    $ticketPrice = 0;
}


echo "Cena biletu:" . $ticketPrice . "zł" ."<br>";
?>  