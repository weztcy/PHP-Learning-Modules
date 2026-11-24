<?php
// Memahami perbedaan jenis-jenis kesalahan di PHP:
// 1. Notice: Peringatan kecil (misal variabel belum dideklarasikan)
// 2. Warning: Peringatan operasi bermasalah tanpa menghentikan eksekusi
// 3. Fatal Error: Kesalahan kritis yang menghentikan program

echo "=== Simulasi Jenis Error PHP ===\n";

// Menggunakan penanganan error kustom untuk menangkap notice/warning secara edukatif
set_error_handler(function ($severity, $message, $file, $line) {
    echo "[Tertangkap Warning/Notice]: {$message} pada baris {$line}\n";
});

// Memicu notice edukatif
$variabelTidakAda;

// Mengembalikan handler default
restore_error_handler();
echo "Eksekusi berlanjut normal setelah penanganan error.\n";
