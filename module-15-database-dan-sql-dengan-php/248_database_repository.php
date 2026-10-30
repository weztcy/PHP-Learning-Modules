<?php
// Repository Pattern mengisolasi logika akses basis data dari logika bisnis utama.

class MahasiswaRepository {
    public function __construct(private PDO $pdo) {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS mahasiswa (id INTEGER PRIMARY KEY, nim TEXT, nama TEXT)");
    }

    public function tambah(string $nim, string $nama): void {
        $stmt = $this->pdo->prepare("INSERT INTO mahasiswa (nim, nama) VALUES (?, ?)");
        $stmt->execute([$nim, $nama]);
    }

    public function ambilSemua(): array {
        return $this->pdo->query("SELECT * FROM mahasiswa")->fetchAll(PDO::FETCH_ASSOC);
    }
}

$pdo = new PDO("sqlite::memory:");
$repo = new MahasiswaRepository($pdo);
$repo->tambah("2026101", "Dedi Kurniawan");
$repo->tambah("2026102", "Fitri Handayani");

echo "=== Data Mahasiswa dari Repository ===\n";
foreach ($repo->ambilSemua() as $m) {
    echo "NIM: {$m['nim']} - {$m['nama']}\n";
}
