<?php
// Variabel counter digunakan untuk menghitung frekuensi kejadian tertentu di dalam perulangan.

$daftarNilai = [75, 45, 88, 60, 92, 55, 80];
$jumlahLulus = 0;
$jumlahRemedial = 0;
$standarKelulusan = 70;

foreach ($daftarNilai as $nilai) {
    if ($nilai >= $standarKelulusan) {
        // Tambahkan penghitung kelulusan
        $jumlahLulus++;
    } else {
        // Tambahkan penghitung remedial
        $jumlahRemedial++;
    }
}

echo "=== Rekap Hasil Ujian ===\n";
echo "Total Siswa Diuji : " . count($daftarNilai) . "\n";
echo "Jumlah Siswa Lulus: {$jumlahLulus}\n";
echo "Jumlah Remedial   : {$jumlahRemedial}\n";
