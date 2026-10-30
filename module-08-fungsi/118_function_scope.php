<?php
// Scope variabel menentukan ruang lingkup keterlihatan variabel (lokal vs global).

$variabelLuar = "Nilai Global";

function ujiScope(): void {
    $variabelDalam = "Nilai Lokal";
    echo "Di dalam fungsi: {$variabelDalam}\n";
    
    // Variabel global tidak otomatis tersedia di dalam fungsi lokal
    echo "Akses \$variabelLuar langsung: " . (isset($variabelLuar) ? $variabelLuar : "Tidak Terlihat") . "\n";
}

ujiScope();
echo "Di luar fungsi: {$variabelLuar}\n";
