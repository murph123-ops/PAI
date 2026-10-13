<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "./" method="POST">  
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name"><br>
        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age"><br>
        <label for="gender">Płeć:</label>
        <input type="radio" name="gender" value="male"> Mężczyzna
        <input type="radio" name="gender" value="female"> Kobieta

        <label for="game">Ulubiona gra:</label>
        <input type="checkbox" name="game" value="GTA"> GTA<br>
        <input type="checkbox" name="game" value="Minecraft"> Minecraft<br>
        <input type="checkbox" name="game" value="League of Legends"> League of Legends<br>

        <input type="submit" value="Wyślij">
        </form>

</body>
</html>

<?php
if(isset($_POST['name']) && isset($_POST['age'])&& !empty($_POST['name']) && !empty($_POST['age'])) {
    echo $_POST['name'] . "<br>";
    echo $_POST['age'] . "<br>";
}else {
    echo "Nie podano imienia lub wieku.";
}
// weryfikacja plci
if(isset($_POST['gender'])){
    if($_POST['gender'] == 'male'){
        echo "Mężczyzna<br>";
    }else{
        echo "Kobieta<br>";
    }
}
// weryfikacja wybranej gry
if(isset($_POST['game']) && $_POST['game'] == 'GTA'){
    echo "Wybrano grę GTA<br>";
}
?>  