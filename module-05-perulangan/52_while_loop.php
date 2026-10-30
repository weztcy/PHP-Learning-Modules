<?php
// Perulangan while mengevaluasi kondisi sebelum blok kode dieksekusi.
// Jika kondisi bernilai false sejak awal, perulangan tidak akan berjalan sama sekali.

$saldo = 1000;
$biayaAdmin = 250;
$bulan = 1;

echo "=== Perulangan While (Simulasi Saldo Rekening) ===\n";

while ($saldo >= $biayaAdmin) {
    // Memotong biaya admin bulanan
    $saldo -= $biayaAdmin;
    echo "Bulan {$bulan}: Biaya admin dipotong, sisa saldo: Rp {$saldo}\n";
    $bulan++;
}

echo "Saldo tidak mencukupi untuk biaya admin bulan berikutnya.\n";
