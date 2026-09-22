<?php

$array = [1,2,3,4,5];
$index_to_remove = 2;

unset($array[$index_to_remove]);
var_dump($array);


for ($i = 0; $i < count($array); $i++) {
   $array[$i] = 0;
}
echo "<br>";
var_dump($array);

echo "<h1> Tablice dwu wymiarowe </h1>";
$array2D = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
var_dump($array2D);

for ($i = 0; $i < count($array2D); $i++) {
    for ($j = 0; $j < count($array2D[$i]); $j++) {
        echo $array2D[$i][$j] . " ";
    }
    echo "<br>";
}

$osoby = [
    ["imie" => "Jan", "wiek" => 30],
    ["imie" => "Anna", "wiek" => 25],
    ["imie" => "Piotr", "wiek" => 40]
];

foreach($osoby as $wiersz){
    foreach($wiersz as $element){
        echo $element . " ";
    
    }
    echo "<br>";
}

for($i = 0; $i < count($osoby); $i++){
    echo $osoby[$i]["imie"] . " " . $osoby[$i]["wiek"] . "<br>";
}
$array4x4 = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12],
    [13,14,15,16],
];

for ($i = 0; $i < count($array4x4); $i++) {
    for ($j = 0; $j < count($array4x4[$i]); $j++) {
        if ($i === $j) {
            $array4x4[$i][$j] = 0;
        }
    }
}

function printArray($array4x4) {
    for ($i = 0; $i < count($array4x4); $i++) {
        for ($j = 0; $j < count($array4x4[$i]); $j++) {
            echo $array4x4[$i][$j] . " ";
        }
        echo "<br>";
    }
}

printArray($array4x4);

$sum = 0;
for ($i = 0; $i < count($array4x4); $i++) {
    for ($j = 0; $j < count($array4x4[$i]); $j++) {
        $sum += $array4x4[$i][$j];
    }
}
echo "Suma wszystkich elementów tablicy: " . $sum;



$firstColumnSum = 0 ;
for ($i = 0; $i < count($array4x4); $i++) {
    $firstColumnSum += $array4x4[$i][0];
}
echo "Suma wszystkich elementów w pierwszej kolumnie: " . $firstColumnSum . "<br>";
?>