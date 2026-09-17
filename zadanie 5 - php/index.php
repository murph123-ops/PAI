<?php
$tablica = [1,2,3,4,5];
foreach ($tablica as $wartosc) {
    echo $wartosc;
}

$owoce = ["jabłko", "gruszka", "banan", "kiwi", "pomarańcza"];
foreach($tablica as $klucz => $wartosc){
    echo "klucz: $klucz, wartość: $wartosc ";
}

$array = [1,2,3];
$assoc_table = ['imie'=>"Ania", 'wiek'=>30];
$empty_array = [];
$array2 = array(1,2,3);

$arrayOfNumbers = [1,2,3];
for ($i = 0; $i < count($arrayOfNumbers); $i++) {
    echo $arrayOfNumbers[$i];
}
?>