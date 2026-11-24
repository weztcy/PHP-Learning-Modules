<?php
// Argument unpacking (splat operator ...) membongkar elemen array saat memanggil fungsi.

function tambahTigaAngka(int $a, int $b, int $c): int {
    return $a + $b + $c;
}

$kumpulanAngka = [15, 25, 35];

// Membongkar array menjadi 3 argumen terpisah
$total = tambahTigaAngka(...$kumpulanAngka);

echo "Hasil unpacking 15 + 25 + 35 = {$total}\n";
