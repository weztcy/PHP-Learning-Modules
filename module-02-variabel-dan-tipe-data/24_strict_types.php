<?php
// Deklarasi declare(strict_types=1) memaksa verifikasi tipe data parameter dan return value secara ketat.
declare(strict_types=1);

// Fungsi berikut mewajibkan parameter bertipe int murni dan mengembalikan int
function hitungLuasPersegi(int $sisi): int {
    // Menghitung luas sisi * sisi
    return $sisi * $sisi;
}

$sisi = 8;
$luas = hitungLuasPersegi($sisi);

echo "Sisi: {$sisi} cm\n";
echo "Luas Persegi: {$luas} cm²\n";
echo "Strict types aktif: pemanggilan dengan tipe yang salah akan memicu TypeError.\n";
