<?php
// Keyword clone menyalin objek. Method __clone() dipanggil untuk menangani deep copy bila ada properti objek bersarang.

class Dokumen {
    public string $judul;

    public function __clone() {
        $this->judul .= " (Salinan)";
    }
}

$dok1 = new Dokumen();
$dok1->judul = "Proposal Proyek";

$dok2 = clone $dok1;

echo "Dokumen 1: {$dok1->judul}\n";
echo "Dokumen 2: {$dok2->judul}\n";
