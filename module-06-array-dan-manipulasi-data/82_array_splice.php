<?php
// array_splice() membuang elemen tertentu dan dapat menggantinya dengan elemen baru secara langsung pada array asli.

$hewan = ["Kucing", "Anjing", "Burung", "Ikan"];

// Menghapus 2 elemen mulai dari indeks 1, dan menggantinya dengan 'Hamster'
$dihapus = array_splice($hewan, 1, 2, ["Hamster"]);

echo "Elemen yang dihapus: " . implode(", ", $dihapus) . "\n";
echo "Kondisi array sekarang: " . implode(", ", $hewan) . "\n";
