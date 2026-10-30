<?php
// Fungsi matematika standar untuk pembulatan, nilai absolut, akar, dan ekstremum.

$angka = 45.678;

echo "Angka Uji      : {$angka}\n";
echo "round (2 desimal): " . round($angka, 2) . "\n";
echo "ceil (ke atas)   : " . ceil($angka) . "\n";
echo "floor (ke bawah) : " . floor($angka) . "\n";
echo "abs (-25)        : " . abs(-25) . "\n";
echo "sqrt (144)       : " . sqrt(144) . "\n";
echo "max (10, 40, 25) : " . max(10, 40, 25) . "\n";
echo "min (10, 40, 25) : " . min(10, 40, 25) . "\n";
