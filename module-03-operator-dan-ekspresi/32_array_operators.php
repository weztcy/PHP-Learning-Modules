<?php
// Operator array di PHP:
// + (Union), == (Equality), === (Identity), != atau <> (Inequality), !== (Non-identity)

$array1 = ["a" => "Apel", "b" => "Belimbing"];
$array2 = ["b" => "Beri", "c" => "Ceri"];

// Operator + menggabungkan array, mengabaikan duplikasi key dari array sebelah kanan
$union = $array1 + $array2;

echo "Hasil Union (\$array1 + \$array2):\n";
print_r($union);

// Membandingkan kesamaan array
$arrA = [1, 2, 3];
$arrB = ["0" => 1, "1" => 2, "2" => 3];
echo "arrA == arrB: " . var_export($arrA == $arrB, true) . "\n";
echo "arrA === arrB: " . var_export($arrA === $arrB, true) . "\n";
