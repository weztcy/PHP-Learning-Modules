<?php
// Abstract class tidak dapat diinstansiasi secara langsung dan menjadi kerangka dasar bagi child class.

abstract class BangunDatar {
    public function __construct(public string $nama) {}

    abstract public function hitungLuas(): float;
}

class Segitiga extends BangunDatar {
    public function __construct(public float $alas, public float $tinggi) {
        parent::__construct("Segitiga");
    }

    public function hitungLuas(): float {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$s = new Segitiga(10, 8);
echo "Nama Bangun: {$s->nama}, Luas: " . $s->hitungLuas() . " cm²\n";
