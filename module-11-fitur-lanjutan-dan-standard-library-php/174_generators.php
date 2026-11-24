<?php
// Generator menghasilkan data satu per satu tanpa mengalokasikan seluruh memori untuk array besar.

function hitungMaju(int $awal, int $akhir): Generator {
    for ($i = $awal; $i <= $akhir; $i++) {
        // Menghasilkan nilai saat diminta tanpa menyimpan seluruh deret dalam RAM
        yield $i;
    }
}

echo "=== Nilai dari Generator ===\n";
foreach (hitungMaju(1, 5) as $angka) {
    echo "Angka: {$angka}\n";
}
