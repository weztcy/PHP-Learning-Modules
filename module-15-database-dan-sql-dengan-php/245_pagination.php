<?php
// Logika pagination query database menggunakan LIMIT dan OFFSET.

$pdo = new PDO("sqlite::memory:");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("CREATE TABLE artikel (id INTEGER PRIMARY KEY, judul TEXT)");

for ($i = 1; $i <= 25; $i++) {
    $pdo->exec("INSERT INTO artikel (judul) VALUES ('Artikel Tutorial #{$i}')");
}

$perHalaman = 5;
$halamanSekarang = 2;
$offset = ($halamanSekarang - 1) * $perHalaman;

$stmt = $pdo->prepare("SELECT * FROM artikel LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $perHalaman, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$artikel = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "=== Halaman {$halamanSekarang} (Data 6-10) ===\n";
foreach ($artikel as $item) {
    echo "[ID: {$item['id']}] {$item['judul']}\n";
}
