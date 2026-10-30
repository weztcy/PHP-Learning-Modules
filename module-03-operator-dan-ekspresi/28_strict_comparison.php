<?php
// Perbandingan identik (=== dan !==) memeriksa nilai SEKALIGUS tipe datanya tanpa type juggling.

$angka = 100;
$string = "100";

// Operator == hanya memeriksa kesamaan nilai setelah konversi otomatis
echo "Loose comparison (100 == '100') : " . var_export($angka == $string, true) . "\n";

// Operator === memastikan nilai dan tipe data sama persis
echo "Strict comparison (100 === '100'): " . var_export($angka === $string, true) . "\n";

// Operator !== memeriksa ketidakidentikan
echo "Strict not identical (100 !== '100'): " . var_export($angka !== $string, true) . "\n";
