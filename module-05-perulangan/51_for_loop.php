<?php
// Perulangan for digunakan ketika jumlah iterasi sudah diketahui secara pasti.
// Terdiri dari: inisialisasi counter, kondisi terminasi, dan penambahan/pengurangan nilai counter.

echo "=== Perulangan For (Mencetak Angka 1 sampai 5) ===\n";

for ($i = 1; $i <= 5; $i++) {
    // Menampilkan nilai iterasi saat ini
    echo "Iterasi ke-{$i}\n";
}

echo "Perulangan for selesai.\n";
