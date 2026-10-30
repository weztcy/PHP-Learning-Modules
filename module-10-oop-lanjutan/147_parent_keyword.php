<?php
// Keyword parent digunakan untuk memanggil method atau constructor milik parent class dari dalam child class.

class Pegawai {
    public function __construct(public string $nama, public float $gajiPokok) {}

    public function rincian(): string {
        return "Pegawai: {$this->nama}, Gaji: Rp {$this->gajiPokok}";
    }
}

class Manajer extends Pegawai {
    public function __construct(string $nama, float $gajiPokok, public float $tunjangan) {
        // Memanggil constructor parent
        parent::__construct($nama, $gajiPokok);
    }

    public function rincian(): string {
        return parent::rincian() . ", Tunjangan: Rp {$this->tunjangan}";
    }
}

$m = new Manajer("Dewi", 8000000, 3000000);
echo $m->rincian() . "\n";
