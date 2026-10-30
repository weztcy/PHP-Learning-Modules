<?php
// Proyek Praktik 5: Sistem Perpustakaan Lengkap (Peminjaman & Denda).

class SistemPerpustakaan {
    private array $katalog = [
        "BK01" => ["judul" => "Algoritma Pemrograman", "status" => "Tersedia"]
    ];

    public function pinjam(string $kode, string $peminjam): void {
        if ($this->katalog[$kode]['status'] === "Tersedia") {
            $this->katalog[$kode]['status'] = "Dipinjam oleh {$peminjam}";
            echo "Peminjaman buku '{$this->katalog[$kode]['judul']}' oleh {$peminjam} BERHASIL.\n";
        }
    }

    public function hitungDenda(int $hariTerlambat): float {
        $tarifPerHari = 2000.0;
        return $hariTerlambat * $tarifPerHari;
    }
}

$perpus = new SistemPerpustakaan();
$perpus->pinjam("BK01", "Fikri");
$denda = $perpus->hitungDenda(4);
echo "Denda keterlambatan 4 hari: Rp " . number_format($denda, 0, ',', '.') . "\n";
