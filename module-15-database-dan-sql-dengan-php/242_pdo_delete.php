<?php
// Menghapus data spesifik berdasarkan parameter ID.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE log_aktivitas (id INTEGER PRIMARY KEY, pesan TEXT)");
$pdo->exec("INSERT INTO log_aktivitas (id, pesan) VALUES (1, 'Log lama'), (2, 'Log baru')");

$stmt = $pdo->prepare("DELETE FROM log_aktivitas WHERE id = ?");
$stmt->execute([1]);

echo "Data berhasil dihapus. Baris terdampak: " . $stmt->rowCount() . "\n";
echo "Sisa log di tabel: " . $pdo->query("SELECT COUNT(*) FROM log_aktivitas")->fetchColumn() . "\n";
