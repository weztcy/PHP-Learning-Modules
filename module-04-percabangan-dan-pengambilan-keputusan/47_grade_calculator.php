<?php
// Program praktis: Penentuan predikat dan kelulusan berdasarkan nilai angka mahasiswa.

$nilaiAkhir = 87.5;
$grade = "";
$keterangan = "";

if ($nilaiAkhir >= 85) {
    $grade = "A";
    $keterangan = "Sangat Memuaskan";
} elseif ($nilaiAkhir >= 75) {
    $grade = "B";
    $keterangan = "Memuaskan";
} elseif ($nilaiAkhir >= 65) {
    $grade = "C";
    $keterangan = "Cukup";
} elseif ($nilaiAkhir >= 50) {
    $grade = "D";
    $keterangan = "Kurang";
} else {
    $grade = "E";
    $keterangan = "Gagal";
}

echo "=== Kalkulator Nilai Mahasiswa ===\n";
echo "Nilai Angka : {$nilaiAkhir}\n";
echo "Grade Huruf : {$grade}\n";
echo "Keterangan  : {$keterangan}\n";
