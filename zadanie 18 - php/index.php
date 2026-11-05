<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

// tworzenie polaczenia
$conn =  mysqli_connect($host, $username , $password, $database);

if(!$conn){
    die("Polaczenie nie powiodlo sie");
}

echo "Polaczenie sie powiodlo"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action = "">
        <label for="name">Nazwa</label>
        <input name="name" type="text"><br>
        <label for="price">Cena</label>
        <input name="price" type="number"><br>
        <label for="amount">Liczba</label>
        <input name="amount" type="number"><br>
        <input type="submit" value="Wyslij"><br>
    </form>

<?php


    if(isset($_POST['name']) && isset($_POST['price']) && isset($_POST['amount'])){
        echo "Nazwa:" .$_POST['name']."<br>";
        echo "Cena:" .$_POST['price']."<br>";
        echo "Liczba:" .$_POST['amount']."<br>";

        $name = $_POST['name'];
        $price = $_POST['price'];
        $amount = $_POST['amount'];

        $sql = "INSERT INTO `products`(`name`, `amount`, `price`) VALUES ('Artem','3','3')";
        // wykonuje zapytanie na bazie danych na podstawie podanego SQLa oraz polaczenia z BD
        if(mysqli_query($conn,$sql)){
            echo "Udalo sie dodac rekord";
        }else{
            echo "Bluescreen Panie" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>    
</body>
</html>
