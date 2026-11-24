<?php
// Menjalankan query DDL dan DML menggunakan method pdo->query() dan pdo->exec().

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Membuat tabel dan menyisipkan data contoh
$pdo->exec("CREATE TABLE kategori (id INTEGER PRIMARY KEY, nama TEXT)");
$pdo->exec("INSERT INTO kategori (nama) VALUES ('Elektronik'), ('Pakaian')");

// Membaca data dengan query
$stmt = $pdo->query("SELECT * FROM kategori");
$hasil = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "=== Hasil pdo->query() ===\n";
foreach ($hasil as $baris) {
    echo "ID: {$baris['id']} | Kategori: {$baris['nama']}\n";
}
