<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "warehouse";

// tworzenie polaczenia
$conn = new mysqli($host, $username , $password, $database);

if($conn->connect_error){
    die("Polaczenie nie powiodlo sie" . $conn->connect_error);
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

        $sql = "INSERT INTO Products (name,price,amount) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql); // przygotowuje na polaczeniu zapytanie sql
        $stmt -> bind_param("sid"$name, $price ,$amount);
        $stmt -> execute();
        $stmt -> close();
        $conn -> close();

    }
?>    
</body>
</html>
