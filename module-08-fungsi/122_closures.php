<?php
// Closure adalah anonymous function yang mampu mengikat (bind) variabel dari scope induknya menggunakan kata kunci use.

function buatPencatat(string $prefix): Closure {
    return function (string $pesan) use ($prefix): void {
        echo "[{$prefix}] {$pesan}\n";
    };
}

$logSistem = buatPencatat("INFO");
$logPeringatan = buatPencatat("WARNING");

$logSistem("Aplikasi berhasil dimulai.");
$logPeringatan("Penggunaan memori mendekati batas.");
