<?php
// Menambah, memperbarui, dan mengakses elemen array menggunakan indeks atau kunci.

$antrean = ["Nasabah A", "Nasabah B"];

// Menambahkan elemen baru ke akhir array secara otomatis
$antrean[] = "Nasabah C";

// Memperbarui nilai pada indeks ke-1
$antrean[1] = "Nasabah B (Diperbarui)";

echo "=== Akses dan Modifikasi Indeks Array ===\n";
foreach ($antrean as $no => $nama) {
    echo "Antrean [{$no}]: {$nama}\n";
}
