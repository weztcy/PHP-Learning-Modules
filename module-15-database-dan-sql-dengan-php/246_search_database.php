<?php
// Pencarian data menggunakan operator LIKE dengan parameter binding.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE buku (id INTEGER PRIMARY KEY, judul TEXT)");
$pdo->exec("INSERT INTO buku (judul) VALUES ('Belajar PHP 8'), ('Mastering Laravel'), ('PHP OOP Lanjutan'), ('Panduan Python')");

$kataKunci = "PHP";
$stmt = $pdo->prepare("SELECT * FROM buku WHERE judul LIKE :query");
$stmt->execute([':query' => "%{$kataKunci}%"]);

$hasilPencarian = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "Pencarian buku dengan kata kunci: '{$kataKunci}'\n";
foreach ($hasilPencarian as $buku) {
    echo "- {$buku['judul']}\n";
}
