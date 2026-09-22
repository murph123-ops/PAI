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

//Wstawianie jednego elementu

$number = 10;
$insertArray = [1,2,3];
$insertArray[1] = $number;

//Wstawianie elementu do calej tablicy
$number = 10;
$insertArray = [1,2,3];

for ($i = 0; $i < count($insertArray); $i++) {
    $insertArray[$i] = $number;
}

echo "<br>";
echo var_dump($insertArray);


//Wstawianie elementu pod wybrany index

$number = 10;
$index = 0;
$insertArray = [1,2,3];
$insertArray[$index] = $number; 


//zadanie



for ($i = 1; $i <= 100; $i += 2) {
    echo $i . " ";
}
for ($i = 100; $i >= 1; $i -= 4) {
    echo $i . " ";
}

$i = 1;
while ($i <= 100) {
    echo $i . " ";
    $i += 2;
}
$i = 100;
while ($i >= 1) {
    echo $i . " ";
    $i -= 4;
}


$i = 1;
do {
    echo $i . " ";
    $i += 2;
} while ($i <= 100);
$i = 100;
do {
    echo $i . " ";
    $i -= 4;
} while ($i >= 1);
?>