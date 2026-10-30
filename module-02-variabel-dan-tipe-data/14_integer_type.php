<?php
// Tipe data integer merepresentasikan bilangan bulat (positif, nol, negatif).
// PHP mendukung notasi desimal, biner (0b), oktal (0o / 0), dan heksadesimal (0x).

$desimal = 42;
$biner = 0b101010; // 42 dalam biner
$oktal = 052;      // 42 dalam oktal
$heksa = 0x2A;     // 42 dalam heksadesimal
$negatif = -150;

echo "Format Desimal     : {$desimal}\n";
echo "Format Biner (0b)  : {$biner}\n";
echo "Format Oktal (0)   : {$oktal}\n";
echo "Format Heksa (0x)  : {$heksa}\n";
echo "Bilangan Negatif   : {$negatif}\n";
echo "Ukuran Maks Integer: " . PHP_INT_MAX . "\n";
