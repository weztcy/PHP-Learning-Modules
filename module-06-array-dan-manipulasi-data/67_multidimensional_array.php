<?php
// Multidimensional array adalah array yang berisi satu atau lebih array di dalamnya.

$daftarKaryawan = [
    ["id" => 101, "nama" => "Rian", "divisi" => "IT"],
    ["id" => 102, "nama" => "Siti", "divisi" => "Keuangan"],
    ["id" => 103, "nama" => "Bayu", "divisi" => "Pemasaran"]
];

echo "=== Daftar Karyawan (Array Multidimensi) ===\n";
foreach ($daftarKaryawan as $karyawan) {
    echo "ID: {$karyawan['id']} | Nama: {$karyawan['nama']} | Divisi: {$karyawan['divisi']}\n";
}
