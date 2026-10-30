<?php
// Penggabungan string menggunakan operator titik (.) dan penugasan (.=).

$gelarDepan = "Dr.";
$nama = "Farhan";
$gelarBelakang = "M.Kom.";

// Menggabungkan beberapa variabel menjadi nama lengkap
$namaLengkap = $gelarDepan . " " . $nama . ", " . $gelarBelakang;

echo "Nama Lengkap: {$namaLengkap}\n";
