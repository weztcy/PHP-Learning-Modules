<?php
// array_filter() menyaring elemen array berdasarkan fungsi callback logika tertentu.

$daftarAngka = [12, 5, 23, 8, 19, 44, 3, 30];

// Menyaring hanya angka yang lebih besar dari atau sama dengan 20
$angkaBesar = array_filter($daftarAngka, function (int $angka): bool {
    return $angka >= 20;
});

echo "Angka asal   : " . implode(", ", $daftarAngka) . "\n";
echo "Hasil filter (>= 20): " . implode(", ", $angkaBesar) . "\n";
