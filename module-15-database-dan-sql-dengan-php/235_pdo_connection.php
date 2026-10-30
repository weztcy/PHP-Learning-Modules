<?php
// Membuka koneksi database menggunakan PHP Data Objects (PDO).
// Menggunakan SQLite in-memory untuk portabilitas mandiri tanpa server database eksternal.

try {
    $pdo = new PDO("sqlite::memory:");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi PDO ke database SQLite in-memory BERHASIL dibuat!\n";
    echo "Driver Database: " . $pdo->getAttribute(PDO::ATTR_DRIVER_NAME) . "\n";
} catch (PDOException $e) {
    echo "Gagal menghubungkan ke database: " . $e->getMessage() . "\n";
}
