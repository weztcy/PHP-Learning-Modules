<?php
// Program simulasi kasir: Menghitung diskon bertingkat berdasarkan total belanja pengguna.

$totalBelanja = 450000;
$persenDiskon = 0;

// Penentuan persentase diskon
if ($totalBelanja >= 500000) {
    $persenDiskon = 20;
} elseif ($totalBelanja >= 250000) {
    $persenDiskon = 10;
} elseif ($totalBelanja >= 100000) {
    $persenDiskon = 5;
} else {
    $persenDiskon = 0;
}

$potongan = $totalBelanja * ($persenDiskon / 100);
$totalBayar = $totalBelanja - $potongan;

echo "=== Kalkulator Diskon Pembelian ===\n";
echo "Total Belanja   : Rp " . number_format($totalBelanja, 0, ',', '.') . "\n";
echo "Diskon Diberikan: {$persenDiskon}% (Hemat Rp " . number_format($potongan, 0, ',', '.') . ")\n";
echo "Total Akhir     : Rp " . number_format($totalBayar, 0, ',', '.') . "\n";
