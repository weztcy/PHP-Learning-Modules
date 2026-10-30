<?php
// Tipe data object adalah instansiasi dari sebuah blueprint class.
// Object menyimpan data (properties) dan perilaku (methods).

class Mobil {
    public string $merk;
    public string $warna;

    public function __construct(string $merk, string $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function klakson(): string {
        return "{$this->merk} berwarna {$this->warna} berbunyi: Tin Tin!";
    }
}

// Membuat instansiasi object baru
$mobilSaya = new Mobil("Toyota", "Hitam");
echo $mobilSaya->klakson() . "\n";
echo "Tipe data variabel: " . gettype($mobilSaya) . "\n";
