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


?>