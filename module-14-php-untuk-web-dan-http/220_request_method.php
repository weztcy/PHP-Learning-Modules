<?php
// Memeriksa metode HTTP yang digunakan client melalui $_SERVER['REQUEST_METHOD'].

$metode = $_SERVER['REQUEST_METHOD'] ?? 'GET';

echo "Metode HTTP yang diterima: {$metode}\n";

switch (strtoupper($metode)) {
    case 'GET':
        echo "Aksi: Menampilkan halaman formulir kepada pengguna.\n";
        break;
    case 'POST':
        echo "Aksi: Memproses penyimpanan data yang disubmit pengguna.\n";
        break;
    default:
        echo "Aksi: Metode HTTP tidak didukung.\n";
        break;
}
