<?php
// Pernyataan return mengembalikan nilai dari fungsi ke pemanggilnya dan langsung menghentikan fungsi.

function hitungKelilingPersegi(float $sisi): float {
    return 4 * $sisi;
}

$sisi = 7.5;
$keliling = hitungKelilingPersegi($sisi);

echo "Sisi persegi: {$sisi} cm\n";
echo "Keliling    : {$keliling} cm\n";
