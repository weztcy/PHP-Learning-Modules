<?php
// Variadic function menggunakan operator splat (...) untuk menerima jumlah argumen yang fleksibel ke dalam array.

function hitungRataRata(float ...$daftarNilai): float {
    if (empty($daftarNilai)) {
        return 0.0;
    }
    // Menghitung total dan membagi dengan jumlah elemen
    return array_sum($daftarNilai) / count($daftarNilai);
}

echo "Rata-rata (3 nilai): " . hitungRataRata(80, 90, 85) . "\n";
echo "Rata-rata (5 nilai): " . hitungRataRata(70, 75, 80, 85, 90) . "\n";
