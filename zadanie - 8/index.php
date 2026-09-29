<?php
// zadanie 15

for($i = 0; $i < 1001; $i++) {
    if($i % 3 == 0 && $i % 7 == 0){
        echo $i . " ";
    }
}
echo "<br>";


// zadanie 16

for($i = 0; $i < 100; $i++) {
    if($i % 3 != 0 ){
        echo $i . " ";
    }
}
echo "<br>";

// zadanie 17

$liczba = 15;
$licznik = 0;
while($licznik < 20){
    if($liczba % 3 ==0){
        echo $liczba . " ";
        $licznik++;
    }
    $liczba++;
}
echo "<br>"; 

// zadanie 19

$array = [1, 4, 3, 6, 8, 9, 2];
$max = $array[0];

foreach($array as $value){
    if($value > $max){
        $max = $value;
    }
}
echo "Największa liczba w tablicy to: " . $max;

echo "<br>";

for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "X ";
        } else {
            echo "O ";
        }
    }
    echo "<br>";
}

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i * $j . "\t";
    }
    echo "<br>";
}
?>