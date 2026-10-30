<?php
// array_unshift() menyisipkan elemen ke bagian awal array.
// array_shift() menghapus dan mengembalikan elemen pertama dari array (struktur queue FIFO).

$antreanTiket = ["Orang B", "Orang C"];

// Menambahkan ke awal antrean
array_unshift($antreanTiket, "Orang VIP A");
echo "Setelah array_unshift: " . implode(", ", $antreanTiket) . "\n";

// Melayani orang pertama
$dilayani = array_shift($antreanTiket);
echo "Orang yang dilayani (shift): {$dilayani}\n";
echo "Sisa antrean               : " . implode(", ", $antreanTiket) . "\n";
