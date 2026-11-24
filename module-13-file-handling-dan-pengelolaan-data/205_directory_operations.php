<?php
// Membuat dan menghapus direktori menggunakan mkdir() dan rmdir().

$folderBaru = __DIR__ . "/folder_sementara";

if (!file_exists($folderBaru)) {
    mkdir($folderBaru, 0777, true);
    echo "Direktori {$folderBaru} berhasil dibuat.\n";
}

// Menghapus kembali direktori setelah pengujian
if (is_dir($folderBaru)) {
    rmdir($folderBaru);
    echo "Direktori {$folderBaru} berhasil dibersihkan dengan rmdir.\n";
}
