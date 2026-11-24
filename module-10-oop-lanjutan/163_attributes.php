<?php
// Attributes (PHP 8.0+) menambahkan metadata terstruktur pada class, method, atau properti (pengganti anotasi docblock).

#[Attribute]
class Rute {
    public function __construct(public string $path, public string $metode = "GET") {}
}

class ProdukController {
    #[Rute("/produk", "GET")]
    public function daftarProduk(): void {
        echo "Menampilkan daftar seluruh produk.\n";
    }
}

echo "Attribute #[Rute] berhasil dideklarasikan pada method controller.\n";
$controller = new ProdukController();
$controller->daftarProduk();
