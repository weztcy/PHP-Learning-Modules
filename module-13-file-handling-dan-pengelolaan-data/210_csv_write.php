<?php
// fputcsv() memformat array menjadi format baris CSV dan menuliskannya ke berkas.

$fileTarget = __DIR__ . "/daftar_harga.csv";
$dataBarang = [
    ["Kode", "Nama Produk", "Harga"],
    ["BRG01", "Meja Kerja", 450000],
    ["BRG02", "Kursi Ergonomis", 850000]
];

$handle = fopen($fileTarget, "w");
if ($handle) {
    foreach ($dataBarang as $row) {
        fputcsv($handle, $row);
    }
    fclose($handle);
    echo "File CSV berhasil ditulis ke {$fileTarget}\n";
    echo "Konten CSV:\n" . file_get_contents($fileTarget);
}
