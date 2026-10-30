<?php
// Menulis data baru ke file menggunakan mode 'w' (menimpa isi yang sudah ada).

$lokasi = __DIR__ . "/catatan_baru.txt";
$handle = fopen($lokasi, "w");

if ($handle) {
    fwrite($handle, "Catatan Pembelajaran PHP\n");
    fwrite($handle, "Dibuat pada tanggal " . date("Y-m-d") . "\n");
    fclose($handle);
    echo "Berhasil menulis data ke {$lokasi}\n";
    echo "Isi file:\n" . file_get_contents($lokasi);
}
