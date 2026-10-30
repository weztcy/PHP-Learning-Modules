<?php
// Memperbarui data yang ada dan menghitung jumlah baris yang terpengaruh (rowCount).

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE akun (id INTEGER PRIMARY KEY, status TEXT)");
$pdo->exec("INSERT INTO akun (id, status) VALUES (1, 'pending')");

$stmt = $pdo->prepare("UPDATE akun SET status = :status WHERE id = :id");
$stmt->execute([':status' => 'verified', ':id' => 1]);

echo "Jumlah baris yang diperbarui (rowCount): " . $stmt->rowCount() . "\n";
echo "Status akun berhasil diubah menjadi verified.\n";
