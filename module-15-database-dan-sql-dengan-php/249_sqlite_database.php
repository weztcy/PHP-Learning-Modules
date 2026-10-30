<?php
// Bekerja dengan basis data SQLite berbasis file lokal menggunakan PDO.

$dbFile = __DIR__ . "/output/app_database.sqlite";
$pdo = new PDO("sqlite:{$dbFile}");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("CREATE TABLE IF NOT EXISTS kontak (id INTEGER PRIMARY KEY AUTOINCREMENT, nama TEXT, no_hp TEXT)");
$pdo->exec("INSERT INTO kontak (nama, no_hp) VALUES ('Pusat Bantuan', '0800-112233')");

$jumlahKontak = $pdo->query("SELECT COUNT(*) FROM kontak")->fetchColumn();

echo "Database SQLite file lokal berhasil dibuat di: {$dbFile}\n";
echo "Total data kontak tersimpan: {$jumlahKontak}\n";
