<?php
// Parameter binding menggunakan bindParam() atau bindValue() dengan named parameter (:nama).

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE siswa (id INTEGER PRIMARY KEY, nama TEXT, nilai INTEGER)");

$stmt = $pdo->prepare("INSERT INTO siswa (nama, nilai) VALUES (:nama, :nilai)");

$nama = "Danang";
$nilai = 92;

// Mengikat parameter bernama
$stmt->bindValue(':nama', $nama, PDO::PARAM_STR);
$stmt->bindValue(':nilai', $nilai, PDO::PARAM_INT);
$stmt->execute();

echo "Parameter binding dengan bindValue() berhasil dijalankan untuk siswa: {$nama}.\n";
