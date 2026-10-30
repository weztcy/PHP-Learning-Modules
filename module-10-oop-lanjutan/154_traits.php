<?php
// Trait memungkinkan penggunaan ulang (reuse) kode method di beberapa class independen tanpa multiple inheritance.

trait PencatatWaktu {
    public function waktuSekarang(): string {
        return date("Y-m-d H:i:s");
    }
}

class Transaksi {
    use PencatatWaktu;

    public function simpan(): void {
        echo "Transaksi dicatat pada: " . $this->waktuSekarang() . "\n";
    }
}

$trx = new Transaksi();
$trx->simpan();
