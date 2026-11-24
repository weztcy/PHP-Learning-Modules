<?php
// Program menghitung akumulasi penjumlahan bilangan dari 1 hingga N (Deret Aritmetika).

$batasAtas = 10;
$totalPenjumlahan = 0;

echo "=== Penjumlahan Bilangan 1 sampai {$batasAtas} ===\n";

for ($angka = 1; $angka <= $batasAtas; $angka++) {
    // Akumulasikan nilai angka ke total
    $totalPenjumlahan += $angka;
}

echo "Deret: 1 + 2 + 3 + ... + {$batasAtas}\n";
echo "Total Hasil Penjumlahan: {$totalPenjumlahan}\n";
