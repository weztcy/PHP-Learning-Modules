<?php
// Assignment (penugasan) di PHP dapat dilakukan melalui assignment by value atau assignment by reference.

// 1. Assignment by Value (menyalin nilai secara independen)
$asal = 100;
$salinan = $asal;
$salinan = 200; // Mengubah salinan tidak berdampak pada variabel asal

echo "Asal: {$asal}, Salinan: {$salinan}\n";

// 2. Assignment by Reference (menggunakan tanda & sehingga merujuk ke memori yang sama)
$nilaiA = 50;
$nilaiB = &$nilaiA;
$nilaiB = 99; // Mengubah $nilaiB akan mengubah $nilaiA

echo "Nilai A setelah reference diubah: {$nilaiA}\n";
echo "Nilai B: {$nilaiB}\n";
