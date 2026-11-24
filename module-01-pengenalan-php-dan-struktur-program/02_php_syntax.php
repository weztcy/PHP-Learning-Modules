<?php
// PHP membedakan case-sensitivity pada variabel, namun case-insensitive pada fungsi dan kata kunci bawaan.

// 1. Variabel bersifat case-sensitive
$nama = "Budi";
$NAMA = "Santoso";

echo "Variabel nama: " . $nama . "\n";
echo "Variabel NAMA: " . $NAMA . "\n";

// 2. Fungsi bawaan dan kata kunci tidak case-sensitive (walaupun praktik terbaik tetap huruf kecil)
ECHO "Kata kunci ECHO huruf besar tetap valid.\n";
echo strlen("Belajar PHP") . " karakter (menggunakan echo & strlen).\n";
