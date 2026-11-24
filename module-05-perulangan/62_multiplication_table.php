<?php
// Program membuat tabel perkalian matematika sederhana menggunakan perulangan.

$faktor = 7;

echo "=== Tabel Perkalian {$faktor} ===\n";

for ($pengali = 1; $pengali <= 10; $pengali++) {
    $hasil = $faktor * $pengali;
    echo "{$faktor} x {$pengali} = {$hasil}\n";
}
