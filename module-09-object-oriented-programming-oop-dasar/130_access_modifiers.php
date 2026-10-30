<?php
// Access modifier menentukan hak akses properti/method:
// public (bebas diakses), protected (hanya dalam class dan turunan), private (hanya dalam class ini).

class Rekening {
    public string $pemilik = "Budi";
    protected string $tipe = "Tabungan Bisnis";
    private int $pin = 123456;

    public function infoPublik(): string {
        return "Pemilik: {$this->pemilik}, Tipe: {$this->tipe}";
    }
}

$rek = new Rekening();
echo $rek->infoPublik() . "\n";
echo "Akses publik langsung: {$rek->pemilik}\n";
