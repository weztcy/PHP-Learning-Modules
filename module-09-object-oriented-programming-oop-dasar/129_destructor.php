<?php
// Destructor (__destruct) otomatis dieksekusi saat objek dihancurkan atau siklus skrip berakhir.

class KoneksiDatabase {
    public string $koneksi;

    public function __construct() {
        $this->koneksi = "Koneksi database dibuka.";
        echo $this->koneksi . "\n";
    }

    public function __destruct() {
        echo "Koneksi database ditutup secara otomatis oleh destructor.\n";
    }
}

$db = new KoneksiDatabase();
unset($db); // Memaksa destructor dipanggil lebih awal
echo "Skrip berlanjut setelah pembersihan resource.\n";
