<?php
// Constructor (__construct) adalah method khusus yang otomatis dieksekusi saat objek baru diinstansiasi.

class Produk {
    public string $nama;
    public int $harga;

    public function __construct(string $nama, int $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        echo "Produk '{$this->nama}' berhasil diinisialisasi.\n";
    }
}

$p = new Produk("Monitor Gaming", 3200000);
echo "Harga: Rp " . number_format($p->harga, 0, ',', '.') . "\n";
