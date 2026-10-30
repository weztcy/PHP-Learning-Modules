<?php
// Menyisipkan data baru dan mengambil ID yang baru saja dibuat dengan lastInsertId().

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE catatan (id INTEGER PRIMARY KEY AUTOINCREMENT, judul TEXT)");

$stmt = $pdo->prepare("INSERT INTO catatan (judul) VALUES (?)");
$stmt->execute(["Mempelajari PDO Insert"]);

$idBaru = $pdo->lastInsertId();
echo "Data berhasil disisipkan dengan ID otomatis: {$idBaru}\n";
