<?php
// Proyek Praktik 4: Sistem Kasir Toko Lengkap (Keranjang Belanja dan Cetak Struk).

class SistemKasir {
    private array $keranjang = [];

    public function beli(string $nama, int $qty, float $harga): void {
        $this->keranjang[] = ["nama" => $nama, "qty" => $qty, "harga" => $harga, "subtotal" => $qty * $harga];
    }

    public function cetakStruk(): void {
        echo "========================================\n";
        echo "            STRUK TOKO MAKMUR           \n";
        echo "========================================\n";
        $total = 0;
        foreach ($this->keranjang as $item) {
            echo sprintf("%-18s %2d x Rp %7s = Rp %8s\n", 
                $item['nama'], $item['qty'], 
                number_format($item['harga'], 0, ',', '.'), 
                number_format($item['subtotal'], 0, ',', '.'));
            $total += $item['subtotal'];
        }
        echo "----------------------------------------\n";
        echo "TOTAL AKHIR           : Rp " . number_format($total, 0, ',', '.') . "\n";
        echo "========================================\n";
    }
}

$kasir = new SistemKasir();
$kasir->beli("Kopi Tubruk", 2, 12000);
$kasir->beli("Roti Panggang", 1, 18000);
$kasir->beli("Air Mineral", 3, 5000);
$kasir->cetakStruk();
