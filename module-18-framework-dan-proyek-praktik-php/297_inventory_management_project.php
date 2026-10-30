<?php
// Proyek Praktik 3: Sistem Inventaris Barang dengan Deteksi Peringatan Restock.

class SistemInventaris {
    private array $stok = [];

    public function tambahProduk(string $kode, string $nama, int $jumlah, int $ambangBatas): void {
        $this->stok[$kode] = ["nama" => $nama, "jumlah" => $jumlah, "min" => $ambangBatas];
    }

    public function keluarBarang(string $kode, int $jumlah): void {
        if (isset($this->stok[$kode])) {
            $this->stok[$kode]['jumlah'] -= $jumlah;
        }
    }

    public function cetakLaporan(): void {
        echo "=== Laporan Inventaris Barang Gudang ===\n";
        foreach ($this->stok as $kode => $p) {
            $status = ($p['jumlah'] <= $p['min']) ? "[PERLU RESTOCK!]" : "[AMAN]";
            echo "{$kode} - {$p['nama']} : {$p['jumlah']} unit {$status}\n";
        }
    }
}

$inv = new SistemInventaris();
$inv->tambahProduk("EL01", "Monitor LCD", 15, 5);
$inv->tambahProduk("EL02", "Mouse Optik", 4, 10);
$inv->keluarBarang("EL01", 12); // stok menjadi 3, di bawah min 5
$inv->cetakLaporan();
