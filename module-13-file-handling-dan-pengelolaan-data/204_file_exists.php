<?php
// Memeriksa keberadaan file (file_exists) dan tipe jalurnya (is_file, is_dir).

$jalurFile = __DIR__ . "/konfigurasi.cfg";

echo "Apakah file konfigurasi ada? " . (file_exists($jalurFile) ? "Ya" : "Tidak") . "\n";
echo "Apakah merupakan berkas (is_file)? " . (is_file($jalurFile) ? "Ya" : "Tidak") . "\n";
echo "Apakah merupakan folder (is_dir)?  " . (is_dir(__DIR__) ? "Ya" : "Tidak") . "\n";
