<?php
// array_combine() membuat array baru dengan menggunakan array pertama sebagai kunci (keys)
// dan array kedua sebagai nilai (values).

$kunci = ["nim", "nama", "prodi"];
$nilai = ["2026001", "Gita Gutawa", "Sistem Informasi"];

$dataMahasiswa = array_combine($kunci, $nilai);

echo "=== Hasil array_combine() ===\n";
print_r($dataMahasiswa);
