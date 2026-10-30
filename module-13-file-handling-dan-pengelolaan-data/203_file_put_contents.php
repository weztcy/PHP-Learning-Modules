<?php
// file_put_contents() menulis string ke file dengan cepat tanpa perlu memanggil fopen/fclose manual.

$lokasi = __DIR__ . "/konfigurasi.cfg";
$konten = "host=localhost\nport=3306\n";

file_put_contents($lokasi, $konten);
echo "File konfigurasi berhasil dibuat menggunakan file_put_contents.\n";
echo file_get_contents($lokasi);
