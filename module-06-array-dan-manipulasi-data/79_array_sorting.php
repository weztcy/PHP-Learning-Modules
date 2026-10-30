<?php
// Fungsi pengurutan array:
// sort() (menaik berdasarkan nilai), rsort() (menurun berdasarkan nilai),
// asort() (menaik mempertahankan key), ksort() (menaik berdasarkan key).

$skor = ["Dina" => 85, "Budi" => 95, "Caca" => 78, "Andi" => 90];

echo "=== Data Skor Awal ===\n";
print_r($skor);

// Mengurutkan berdasarkan nilai dari tertinggi ke terendah (mempertahankan kunci)
arsort($skor);

echo "\n=== Hasil arsort() (Ranking Tertinggi) ===\n";
foreach ($skor as $nama => $nilai) {
    echo "{$nama}: {$nilai}\n";
}
