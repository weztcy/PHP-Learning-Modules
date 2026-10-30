<?php
// Pernyataan 'print' mirip dengan 'echo', namun selalu mengembalikan nilai 1.
// Karena memiliki nilai balik, 'print' dapat digunakan dalam ekspresi kondisional.

$pesan = "Halo dari pernyataan print!\n";
$hasil = print($pesan);

// Memperlihatkan bahwa print mengembalikan nilai integer 1
echo "Nilai balik yang dihasilkan fungsi print: " . $hasil . "\n";

// Contoh penggunaan print di dalam ekspresi ternary
$status = true;
$status ? print("Status aktif terverifikasi.\n") : print("Status non-aktif.\n");
