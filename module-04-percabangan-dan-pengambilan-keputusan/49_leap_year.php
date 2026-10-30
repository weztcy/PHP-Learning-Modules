<?php
// Program menentukan apakah sebuah tahun merupakan tahun kabisat (leap year).
// Aturan: Habis dibagi 400 ATAU (habis dibagi 4 TETAPI TIDAK habis dibagi 100).

function cekKabisat(int $tahun): bool {
    return ($tahun % 400 === 0) || ($tahun % 4 === 0 && $tahun % 100 !== 0);
}

$daftarTahun = [1900, 2000, 2024, 2025, 2026];

echo "=== Pemeriksaan Tahun Kabisat ===\n";
foreach ($daftarTahun as $th) {
    $status = cekKabisat($th) ? "TAHUN KABISAT (366 hari)" : "Bukan Kabisat (365 hari)";
    echo "Tahun {$th}: {$status}\n";
}
