<?php
// Mengambil data dari tabel menggunakan fetch() untuk satu baris dan fetchAll() untuk semua baris.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE barang (id INTEGER PRIMARY KEY, nama TEXT, stok INTEGER)");
$pdo->exec("INSERT INTO barang (nama, stok) VALUES ('Pensil 2B', 100), ('Buku Tulis', 50)");

$stmt = $pdo->query("SELECT * FROM barang ORDER BY stok DESC");
$semuaBarang = $stmt->fetchAll(PDO::FETCH_OBJ);

echo "=== Daftar Barang (PDO::FETCH_OBJ) ===\n";
foreach ($semuaBarang as $b) {
    echo "ID: {$b->id} | {$b->nama} | Stok: {$b->stok} pcs\n";
}
