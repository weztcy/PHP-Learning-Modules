<?php
// Proyek Praktik 2: Sistem Pengelolaan Mahasiswa (CRUD SQLite In-Memory).

class SistemMahasiswa {
    private PDO $db;

    public function __construct() {
        $this->db = new PDO("sqlite::memory:");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->exec("CREATE TABLE mahasiswa (nim TEXT PRIMARY KEY, nama TEXT, prodi TEXT, ipk REAL)");
    }

    public function tambah(string $nim, string $nama, string $prodi, float $ipk): void {
        $stmt = $this->db->prepare("INSERT INTO mahasiswa VALUES (?, ?, ?, ?)");
        $stmt->execute([$nim, $nama, $prodi, $ipk]);
    }

    public function tampilkanSemua(): void {
        $stmt = $this->db->query("SELECT * FROM mahasiswa ORDER BY ipk DESC");
        echo "=== Data Mahasiswa Kampus ===\n";
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $m) {
            echo "NIM: {$m['nim']} | {$m['nama']} | {$m['prodi']} | IPK: {$m['ipk']}\n";
        }
    }
}

$sistem = new SistemMahasiswa();
$sistem->tambah("202601", "Budi Santoso", "Teknik Informatika", 3.85);
$sistem->tambah("202602", "Siti Nurhaliza", "Sistem Informasi", 3.92);
$sistem->tampilkanSemua();
