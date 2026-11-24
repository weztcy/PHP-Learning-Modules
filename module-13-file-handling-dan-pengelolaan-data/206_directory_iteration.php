<?php
// Membaca daftar file dalam direktori menggunakan scandir().

$daftarBerkas = scandir(__DIR__);

echo "=== Isi Direktori Modul 13 ===\n";
foreach ($daftarBerkas as $item) {
    if ($item !== "." && $item !== "..") {
        echo "- {$item}\n";
    }
}
