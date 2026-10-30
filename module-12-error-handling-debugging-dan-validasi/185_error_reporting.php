<?php
// Konfigurasi pelaporan error menggunakan error_reporting() dan opsi display_errors.

// Menampilkan seluruh level error, warning, dan notice saat tahap pengembangan
error_reporting(E_ALL);
ini_set('display_errors', '1');

echo "Tingkat pelaporan error (error_reporting): E_ALL aktif.\n";
echo "Display errors: " . ini_get('display_errors') . "\n";
echo "Lingkungan siap mendeteksi kesalahan sintaks dan logika.\n";
