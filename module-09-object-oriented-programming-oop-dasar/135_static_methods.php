<?php
// Static methods dapat dipanggil langsung dari class tanpa membuat instans objek terlebih dahulu.

class KalkulatorMatematika {
    public static function kali(float $a, float $b): float {
        return $a * $b;
    }
}

$hasil = KalkulatorMatematika::kali(6.5, 4);
echo "Hasil perkalian static method: {$hasil}\n";
