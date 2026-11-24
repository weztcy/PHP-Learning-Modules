<?php
// Data Providers menjalankan satu method pengujian yang sama dengan berbagai kumpulan data masukan.

function hitungDiskon(int $total): int {
    return ($total >= 100000) ? 10 : 0;
}

$daftarKasusUji = [
    "Belanja di bawah 100k" => ["total" => 50000, "expectedDiskon" => 0],
    "Belanja tepat 100k"   => ["total" => 100000, "expectedDiskon" => 10],
    "Belanja di atas 100k"  => ["total" => 200000, "expectedDiskon" => 10]
];

echo "=== Pengujian Berbasis Data Provider ===\n";
foreach ($daftarKasusUji as $skenario => $data) {
    $hasil = hitungDiskon($data['total']);
    $status = ($hasil === $data['expectedDiskon']) ? "PASS" : "FAIL";
    echo "[{$status}] {$skenario}: didapat {$hasil}%, diharapkan {$data['expectedDiskon']}%\n";
}
