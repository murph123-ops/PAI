<?php
$array = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];
printArray($array);
printArray($array2);
echo sumNumbers(6,7,6,7,6,7,6,7,6,7,6,7);
echo "<br>";
echo multiplyNumbers(9,10);
echo "<br>";
echo czyPierwsza(7);
echo "<br>";
echo czyPierwsza(10);
echo "<br>";
echo wypiszLiczbyPierwszeZZakresu(1,100);

// wypisanie tablicy w funkcji

function printArray($array) {
    for($i = 0; $i < count($array); $i++) {
        echo $array[$i] . " ";
    }
echo "<br>";
}

// zmienna liczba argumentow

function sumNumbers(...$x){
    $sum = 0;
    for($i = 0; $i < count($x); $i++) {
        $sum = $sum += $x[$i];
    }
    return $sum;

}

// wartosc domyslna 9
// int w parametrach to jakiego typu sa przyjmowane parametry
// int po dwukropku na koncu sygnatury funkcji funkcji oznacza typ zwracany przez funkcje

function multiplyNumbers($a, $b = 9){
    return $a * $b;
}

// zamiana na wielkie litery
function zamienNaWielkie(string $tekst): string {
    return strtoupper($tekst);
}


function czyPierwsza(int $n): bool{
    if($n < 2) {
        return false;
    }    
    for($i = 2;$i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            echo $n . "X" . $i;
            return false;
        }
    }
    return true;
}

function wypiszLiczbyPierwszeZZakresu($poczatek , $koniec){
    for($i = $poczatek;$i <= $koniec; $i++) {
        if(czyPierwsza($i)) {
            echo $i . " ";
        }
    }
}


// zadanie stworz funkcje obliczStatystyki(array $liczby): array ktora zwraca tablice asocjacyjna z kluczami min,max,srednia,suma.Kazda z tych opcji to osobna funkcja.
?>