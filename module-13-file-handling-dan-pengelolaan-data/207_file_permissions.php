<?php
// Memeriksa hak akses baca dan tulis pada berkas (is_readable, is_writable).

$berkas = __DIR__ . "/konfigurasi.cfg";

echo "Pemeriksaan Izin File: " . basename($berkas) . "\n";
echo "Dapat dibaca (is_readable)? : " . (is_readable($berkas) ? "Ya" : "Tidak") . "\n";
echo "Dapat ditulis (is_writable)? : " . (is_writable($berkas) ? "Ya" : "Tidak") . "\n";
