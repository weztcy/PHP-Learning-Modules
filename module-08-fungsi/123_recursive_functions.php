<?php
// Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri sampai mencapai kondisi henti (base case).

function faktorialRekursif(int $n): int {
    // Base case: jika n <= 1, kembalikan 1
    if ($n <= 1) {
        return 1;
    }
    // Recursive case: n * faktorial(n - 1)
    return $n * faktorialRekursif($n - 1);
}

$angka = 6;
echo "Faktorial {$angka}! = " . faktorialRekursif($angka) . "\n";
