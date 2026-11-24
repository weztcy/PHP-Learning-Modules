<?php
// fgetcsv() membaca baris dari file CSV dan mengonversinya langsung menjadi array.

$fileCsv = __DIR__ . "/data_siswa.csv";
file_put_contents($fileCsv, "NIM,Nama,Jurusan\n101,Budi,Informatika\n102,Ani,Sistem Informasi\n");

$handle = fopen($fileCsv, "r");
echo "=== Data Siswa dari File CSV ===\n";

if ($handle) {
    while (($baris = fgetcsv($handle, 1000, ",")) !== false) {
        echo "NIM: {$baris[0]} | Nama: {$baris[1]} | Jurusan: {$baris[2]}\n";
    }
    fclose($handle);
}
