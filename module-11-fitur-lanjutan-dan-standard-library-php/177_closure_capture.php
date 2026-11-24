<?php
// Closure dapat mengikat variabel lokal secara manual (use) dan memanggil bindTo untuk memodifikasi scope $this.

class PesanRahasia {
    private string $kode = "KODE-RAHASIA-778";
}

$objek = new PesanRahasia();

// Mengambil properti private dengan Closure::bind
$pembaca = function () {
    return $this->kode;
};

$pembacaTerikat = $pembaca->bindTo($objek, PesanRahasia::class);
echo "Nilai private terambil via Closure bindTo: " . $pembacaTerikat() . "\n";
