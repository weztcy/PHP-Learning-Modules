<?php
// Keyword $this adalah referensi ke instans objek saat ini di dalam class.

class ProfilKaryawan {
    public string $nama;

    public function setNama(string $nama): void {
        // $this->nama merujuk properti objek, sedangkan $nama merujuk parameter lokal
        $this->nama = $nama;
    }

    public function perkenalkan(): void {
        echo "Halo, saya {$this->nama}.\n";
    }
}

$k = new ProfilKaryawan();
$k->setNama("Kartika");
$k->perkenalkan();
