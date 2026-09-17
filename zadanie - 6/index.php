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
?>
