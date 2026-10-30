<?php
// Prepared Statements memisahkan query SQL dari data masukan untuk mencegah serangan SQL Injection.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE produk (id INTEGER PRIMARY KEY, nama TEXT, harga REAL)");

// Menyiapkan statement dengan placeholder tanda tanya (?)
$stmt = $pdo->prepare("INSERT INTO produk (nama, harga) VALUES (?, ?)");
$stmt->execute(["Mouse Wireless", 125000.0]);
$stmt->execute(["Headset Bluetooth", 350000.0]);

echo "Prepared statements berhasil dieksekusi dengan aman!\n";
echo "Total data tersimpan: " . $pdo->query("SELECT COUNT(*) FROM produk")->fetchColumn() . "\n";
