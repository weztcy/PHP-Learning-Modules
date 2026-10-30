<?php
// implode() (atau join()) menggabungkan elemen-elemen array menjadi satu string tunggal dengan delimiter.

$kataKunci = ["belajar", "php", "dasar", "pemula"];

$queryUrl = implode("-", $kataKunci);

echo "Daftar kata: " . json_encode($kataKunci) . "\n";
echo "Hasil implode dengan strip (-): {$queryUrl}\n";
