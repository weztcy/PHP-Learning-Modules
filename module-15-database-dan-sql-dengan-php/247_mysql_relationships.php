<?php
// Relasi antar tabel One-to-Many menggunakan Foreign Key dan relasi query INNER JOIN.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Tabel 1: Penulis
$pdo->exec("CREATE TABLE penulis (id INTEGER PRIMARY KEY, nama TEXT)");
// Tabel 2: Postingan berelasi ke penulis
$pdo->exec("CREATE TABLE postingan (id INTEGER PRIMARY KEY, penulis_id INTEGER, judul TEXT)");

$pdo->exec("INSERT INTO penulis (id, nama) VALUES (1, 'Ahmad Sanusi')");
$pdo->exec("INSERT INTO postingan (penulis_id, judul) VALUES (1, 'Arsitektur Bersih di PHP'), (1, 'Panduan Database')");

$sql = "SELECT p.judul, pen.nama AS nama_penulis 
        FROM postingan p 
        INNER JOIN penulis pen ON p.penulis_id = pen.id";

$stmt = $pdo->query($sql);
echo "=== Relasi Tabel (INNER JOIN) ===\n";
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $baris) {
    echo "Judul: {$baris['judul']} | Penulis: {$baris['nama_penulis']}\n";
}
