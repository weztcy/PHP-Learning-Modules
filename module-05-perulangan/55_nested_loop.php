<?php
// Nested loop adalah perulangan yang berada di dalam perulangan lain (perulangan bersarang).
// Sering digunakan untuk mengolah struktur matriks, tabel dua dimensi, atau pola grafis.

echo "=== Matriks Koordinat Grid (3 baris x 3 kolom) ===\n";

for ($baris = 1; $baris <= 3; $baris++) {
    for ($kolom = 1; $kolom <= 3; $kolom++) {
        // Mencetak titik koordinat tanpa baris baru
        echo "[B{$baris},K{$kolom}] ";
    }
    // Ganti baris setelah seluruh kolom pada baris selesai dicetak
    echo "\n";
}
