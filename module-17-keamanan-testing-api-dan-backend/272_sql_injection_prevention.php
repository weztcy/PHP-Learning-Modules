<?php
// Demonstrasi pencegahan SQL Injection dengan PDO Prepared Statements vs query rentan.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE users (id INTEGER PRIMARY KEY, username TEXT, password TEXT)");
$pdo->exec("INSERT INTO users (username, password) VALUES ('admin', 'hash_pass')");

$inputUser = "' OR '1'='1"; // Payload SQL Injection

// Pendekatan AMAN: Prepared Statement
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :user");
$stmt->execute([':user' => $inputUser]);
$hasilAman = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "Hasil query aman dengan prepared statement: " . count($hasilAman) . " baris ditemukan (SQL Injection digagalkan).\n";
