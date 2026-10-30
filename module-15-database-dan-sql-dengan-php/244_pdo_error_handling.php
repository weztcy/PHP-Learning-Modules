<?php
// Mengonfigurasi mode penanganan kesalahan PDO menggunakan PDO::ERRMODE_EXCEPTION.

try {
    $pdo = new PDO("sqlite::memory:");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Memicu error sintaks SQL pada tabel yang tidak ada
    $pdo->query("SELECT * FROM tabel_palsu_yang_tidak_ada");
} catch (PDOException $e) {
    echo "PDOException tertangkap secara terstruktur!\n";
    echo "Kode Error: " . $e->getCode() . "\n";
    echo "Pesan     : " . $e->getMessage() . "\n";
}
