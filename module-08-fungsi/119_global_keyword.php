<?php
// Kata kunci global atau array superglobal $GLOBALS digunakan untuk mengakses variabel global di dalam fungsi.

$totalSkor = 50;

function tambahSkor(int $poin): void {
    // Mengakses variabel global menggunakan keyword global
    global $totalSkor;
    $totalSkor += $poin;
}

echo "Skor awal   : {$totalSkor}\n";
tambahSkor(25);
echo "Skor sesudah: {$totalSkor}\n";
