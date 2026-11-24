<?php
// Penanganan error runtime menggunakan blok try-catch untuk menangkap Exception.

function bagiBilangan(float $pembilang, float $penyebut): float {
    if ($penyebut == 0.0) {
        throw new Exception("Penyebut tidak boleh bernilai nol!");
    }
    return $pembilang / $penyebut;
}

try {
    echo "Mencoba membagi 100 dengan 4: " . bagiBilangan(100, 4) . "\n";
    echo "Mencoba membagi 50 dengan 0...\n";
    echo bagiBilangan(50, 0);
} catch (Exception $e) {
    // Menangkap dan menangani exception yang dilempar
    echo "Exception tertangkap: " . $e->getMessage() . "\n";
}
