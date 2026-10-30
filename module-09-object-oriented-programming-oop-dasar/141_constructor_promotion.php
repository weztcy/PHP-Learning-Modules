<?php
// Constructor Property Promotion (PHP 8.0+) mendeklarasikan sekaligus menginisialisasi properti langsung pada parameter constructor.

class BukuPelajaran {
    // Properti langsung dibuat dan diberi nilai secara otomatis
    public function __construct(
        public string $judul,
        public int $halaman,
        public float $harga
    ) {}
}

$buku = new BukuPelajaran("Struktur Data PHP", 280, 85000.0);
echo "Judul: {$buku->judul} ({$buku->halaman} hal, Rp {$buku->harga})\n";
