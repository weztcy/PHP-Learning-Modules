<?php
// Menambahkan data ke akhir file menggunakan mode 'a' (append) tanpa menghapus data lama.

$lokasi = __DIR__ . "/aktivitas.log";
$handle = fopen($lokasi, "a");

if ($handle) {
    fwrite($handle, "[" . date("H:i:s") . "] Pengguna melakukan aksi.\n");
    fclose($handle);
    echo "Data berhasil di-append ke file {$lokasi}\n";
    echo "Isi file sekarang:\n" . file_get_contents($lokasi);
}
