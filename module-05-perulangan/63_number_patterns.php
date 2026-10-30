<?php
// Program mencetak pola segitiga siku-siku berisi deret angka.

$tinggi = 5;

echo "=== Pola Piramida Segitiga Angka ===\n";

for ($baris = 1; $baris <= $tinggi; $baris++) {
    // Mencetak angka berurutan pada setiap baris
    for ($kolom = 1; $kolom <= $baris; $kolom++) {
        echo "{$kolom} ";
    }
    echo "\n";
}
