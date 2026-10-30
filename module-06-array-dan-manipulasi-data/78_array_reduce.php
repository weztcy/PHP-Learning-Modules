<?php
// array_reduce() mengolah dan mereduksi array menjadi satu nilai tunggal secara iteratif.

$angka = [10, 20, 30, 40];

// Menjumlahkan seluruh elemen dengan nilai akumulator awal 0
$total = array_reduce($angka, function (int $carry, int $item): int {
    return $carry + $item;
}, 0);

echo "Array elemen: " . implode(", ", $angka) . "\n";
echo "Hasil reduksi akumulasi total: {$total}\n";
