<?php
// Type juggling adalah konversi otomatis (implisit) yang dilakukan PHP saat mengevaluasi operasi.
// PHP menyesuaikan tipe operand sesuai kebutuhan operator.

$angka = 10;
$teks = "25";

// Operator penjumlahan (+) memaksa string '25' dikonversi menjadi integer 25
$hasilTambah = $angka + $teks;
echo "10 + '25' = {$hasilTambah} (Tipe: " . gettype($hasilTambah) . ")\n";

// Penggabungan string (.) memaksa integer dikonversi menjadi string
$hasilGabung = $angka . " buah";
echo "10 . ' buah' = {$hasilGabung} (Tipe: " . gettype($hasilGabung) . ")\n";

// Perbandingan non-identik melakukan type juggling
echo "'100' == 100 ? " . ('100' == 100 ? "Sama (Type Juggling)" : "Beda") . "\n";
