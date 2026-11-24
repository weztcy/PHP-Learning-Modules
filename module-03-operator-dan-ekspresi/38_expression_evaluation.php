<?php
// Ekspresi di PHP adalah kombinasi dari nilai, variabel, operator, dan fungsi yang menghasilkan suatu nilai.

// 1. Ekspresi sederhana
$x = 10;
$y = $x + 5; // $x + 5 adalah ekspresi yang menghasilkan 15

// 2. Ekspresi gabungan kompleks
$kondisi = ($x > 5) && ($y < 20);

// 3. Evaluasi pemanggilan fungsi sebagai ekspresi
function getDiskon(): float {
    return 0.15;
}

$totalBelanja = 200000;
$totalBayar = $totalBelanja - ($totalBelanja * getDiskon());

echo "Nilai y: {$y}\n";
echo "Hasil evaluasi kondisi: " . var_export($kondisi, true) . "\n";
echo "Total belanja: Rp {$totalBelanja}\n";
echo "Total setelah diskon 15%: Rp {$totalBayar}\n";
