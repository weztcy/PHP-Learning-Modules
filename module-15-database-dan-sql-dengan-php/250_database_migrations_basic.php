<?php
// Konsep dasar Migrasi Database: menerapkan perubahan struktur tabel (up) dan mengembalikannya (down).

class BuatTabelPelangganMigration {
    public function up(PDO $pdo): void {
        $sql = "CREATE TABLE IF NOT EXISTS pelanggan (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            nama TEXT NOT NULL,
            email TEXT UNIQUE NOT NULL
        )";
        $pdo->exec($sql);
        echo "[Migration UP]: Tabel 'pelanggan' berhasil dibuat.\n";
    }

    public function down(PDO $pdo): void {
        $pdo->exec("DROP TABLE IF EXISTS pelanggan");
        echo "[Migration DOWN]: Tabel 'pelanggan' berhasil di-drop/dihapus.\n";
    }
}

$pdo = new PDO("sqlite::memory:");
$migration = new BuatTabelPelangganMigration();

// Menjalankan migrasi UP
$migration->up($pdo);

// Menjalankan migrasi DOWN (Rollback)
$migration->down($pdo);
