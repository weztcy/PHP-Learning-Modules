<?php
// Operator penugasan (assignment) menyederhanakan penugasan sekaligus operasi aritmetika:
// =, +=, -=, *=, /=, %=, **=, .=

$saldo = 100000;
echo "Saldo awal          : Rp {$saldo}\n";

$saldo += 50000; // $saldo = $saldo + 50000
echo "Setelah setor (+50k): Rp {$saldo}\n";

$saldo -= 30000; // $saldo = $saldo - 30000
echo "Setelah tarik (-30k): Rp {$saldo}\n";

$saldo *= 2;     // $saldo = $saldo * 2
echo "Setelah bonus (*2)  : Rp {$saldo}\n";

$kata = "Belajar";
$kata .= " PHP 8"; // Menggabungkan string
echo "Hasil string concat : {$kata}\n";
