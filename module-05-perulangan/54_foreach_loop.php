<?php
// Perulangan foreach dirancang khusus untuk mengiterasi elemen-elemen array atau objek.
// Mendukung pembacaan nilai saja ($item) maupun pasangan kunci dan nilai ($key => $val).

$daftarBahasa = ["PHP", "JavaScript", "Python", "SQL"];

echo "=== Foreach: Indexed Array ===\n";
foreach ($daftarBahasa as $index => $bahasa) {
    echo "Indeks [{$index}] => {$bahasa}\n";
}

$profil = [
    "Peran" => "Backend Developer",
    "Lokasi" => "Indonesia",
    "Status" => "Aktif"
];

echo "\n=== Foreach: Associative Array ===\n";
foreach ($profil as $kunci => $nilai) {
    echo "{$kunci}: {$nilai}\n";
}
