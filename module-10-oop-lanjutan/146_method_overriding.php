<?php
// Method overriding memungkinkan child class mengganti implementasi method yang diwariskan dari parent class.

class Pembayaran {
    public function proses(float $jumlah): void {
        echo "Memproses pembayaran umum: Rp {$jumlah}\n";
    }
}

class PembayaranQris extends Pembayaran {
    public function proses(float $jumlah): void {
        echo "Memproses scan QRIS instan: Rp {$jumlah} (Biaya MDR 0%)\n";
    }
}

$bayar = new PembayaranQris();
$bayar->proses(50000);
