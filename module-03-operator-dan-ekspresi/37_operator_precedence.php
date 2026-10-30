<?php
// Prioritas operator (operator precedence) menentukan urutan operasi mana yang dihitung terlebih dahulu.
// Perkalian (*) memiliki prioritas lebih tinggi daripada penjumlahan (+).
// Tanda kurung () digunakan untuk memaksa urutan evaluasi sesuai keinginan pembuat program.

// Evaluasi tanpa tanda kurung: 4 * 5 dihitung terlebih dahulu = 20, lalu 2 + 20 = 22
$hasil1 = 2 + 4 * 5;

// Evaluasi dengan tanda kurung: (2 + 4) dihitung terlebih dahulu = 6, lalu 6 * 5 = 30
$hasil2 = (2 + 4) * 5;

echo "Hasil evaluasi tanpa kurung 2 + 4 * 5  : {$hasil1}\n";
echo "Hasil evaluasi dengan kurung (2 + 4) * 5: {$hasil2}\n";
