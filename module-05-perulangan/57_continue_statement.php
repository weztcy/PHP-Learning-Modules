<?php
// Pernyataan continue melompati sisa instruksi pada iterasi saat ini
// dan langsung melanjutkan ke iterasi perulangan berikutnya.

echo "=== Mencetak Angka Ganjil Saja Menggunakan Continue ===\n";

for ($i = 1; $i <= 10; $i++) {
    // Jika angka genap, lewati iterasi saat ini
    if ($i % 2 === 0) {
        continue;
    }
    
    echo "Angka Ganjil: {$i}\n";
}
