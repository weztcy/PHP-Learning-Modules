<?php
// Indentasi yang rapi sangat penting untuk keterbacaan kode (readability).
// Standar PSR-12 merekomendasikan penggunaan 4 spasi untuk setiap level indentasi.

$nilai = 85;

// Contoh indentasi yang baik pada blok percabangan
if ($nilai >= 75) {
    // Indentasi 4 spasi memudahkan identifikasi kode dalam blok if
    echo "Status: Lulus ujian dengan nilai {$nilai}.\n";
    
    if ($nilai >= 85) {
        // Indentasi tingkat kedua untuk blok bersarang
        echo "Predikat: Sangat Memuaskan (A).\n";
    }
} else {
    echo "Status: Belum lulus, silakan ikuti ujian perbaikan.\n";
}
