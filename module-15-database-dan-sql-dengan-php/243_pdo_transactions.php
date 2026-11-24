<?php
// Transaksi menjamin atomisitas (ACID): seluruh query sukses (commit) atau dibatalkan semua (rollBack).

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE dompet (id INTEGER PRIMARY KEY, nama TEXT, saldo INTEGER)");
$pdo->exec("INSERT INTO dompet (id, nama, saldo) VALUES (1, 'Pengirim', 500000), (2, 'Penerima', 100000)");

try {
    // Memulai transaksi
    $pdo->beginTransaction();

    // 1. Kurangi saldo pengirim
    $pdo->exec("UPDATE dompet SET saldo = saldo - 150000 WHERE id = 1");

    // 2. Tambah saldo penerima
    $pdo->exec("UPDATE dompet SET saldo = saldo + 150000 WHERE id = 2");

    // Commit seluruh perubahan jika tidak ada kesalahan
    $pdo->commit();
    echo "Transaksi transfer Rp 150.000 BERHASIL di-commit!\n";
} catch (Exception $e) {
    // Batalkan seluruh perubahan jika terjadi kendala
    $pdo->rollBack();
    echo "Transaksi GAGAL dan berhasil di-rollback: " . $e->getMessage() . "\n";
}

$stmt = $pdo->query("SELECT * FROM dompet");
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $d) {
    echo "{$d['nama']}: Rp " . number_format($d['saldo'], 0, ',', '.') . "\n";
}
