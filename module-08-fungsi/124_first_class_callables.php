<?php
// First-class callable syntax (PHP 8.1+) menggunakan format namaFungsi(...) untuk merujuk fungsi sebagai Closure.

$daftarKata = ["apel", "belimbing", "ceri"];

// Menggunakan strlen(...) sebagai callable
$panjangKarakter = array_map(strlen(...), $daftarKata);

echo "Daftar kata: " . implode(", ", $daftarKata) . "\n";
echo "Panjang tiap kata: " . implode(", ", $panjangKarakter) . "\n";
