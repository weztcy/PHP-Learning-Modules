<?php
// Program menghitung nilai faktorial n! = n * (n-1) * ... * 1 menggunakan perulangan.

$n = 5;
$faktorial = 1;

// Menghitung perkalian mundur dari n hingga 1
for ($i = $n; $i >= 1; $i--) {
    $faktorial *= $i;
}

echo "=== Perhitungan Faktorial ===\n";
echo "Nilai {$n}! = {$faktorial}\n";
echo "Keterangan: 5 x 4 x 3 x 2 x 1 = 120\n";
