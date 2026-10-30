<?php
// Integration testing menguji keterhubungan antara logika kode dengan basis data SQLite nyata.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE logs (id INTEGER PRIMARY KEY, aksi TEXT)");

// Menjalankan integrasi
$pdo->exec("INSERT INTO logs (aksi) VALUES ('LOGIN_USER_1')");
$jumlah = $pdo->query("SELECT COUNT(*) FROM logs")->fetchColumn();

echo "Integration Test: Data berhasil tersimpan di tabel database.\n";
echo "Verifikasi Baris: " . ($jumlah == 1 ? "[PASS] 1 baris tersimpan" : "[FAIL]") . "\n";
