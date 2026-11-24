<?php
// Nested if adalah struktur percabangan di dalam percabangan lain.
// Digunakan untuk validasi bertingkat.

$punyaTiket = true;
$usia = 20;

if ($punyaTiket) {
    echo "Tiket terverifikasi valid.\n";
    
    // Percabangan tingkat kedua untuk menentukan kategori tempat duduk
    if ($usia >= 18) {
        echo "Akses diberikan: Kategori Dewasa.\n";
    } else {
        echo "Akses diberikan: Kategori Remaja/Anak.\n";
    }
} else {
    echo "Akses ditolak: Anda belum memiliki tiket.\n";
}
