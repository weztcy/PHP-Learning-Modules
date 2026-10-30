<?php
// Program simulasi logika permainan tebak angka secara terarah (deterministik).

$angkaRahasia = 42;
$daftarTebakan = [20, 60, 35, 45, 42];

echo "=== Simulasi Permainan Tebak Angka ===\n";
echo "Target angka tersembunyi telah disiapkan.\n";

foreach ($daftarTebakan as $putaran => $tebakan) {
    $nomorPutaran = $putaran + 1;
    echo "Percobaan #{$nomorPutaran}: Menebak {$tebakan}... ";
    
    if ($tebakan === $angkaRahasia) {
        echo "[TEPAT!] Selamat, tebakan Anda BENAR!\n";
        break;
    } elseif ($tebakan < $angkaRahasia) {
        echo "[Terlalu Kecil] Coba angka lebih besar.\n";
    } else {
        echo "[Terlalu Besar] Coba angka lebih kecil.\n";
    }
}
