<?php
// Fungsi konversi huruf besar dan kecil:
// strtoupper(), strtolower(), ucfirst(), ucwords()

$kalimat = "belajar pemrograman php itu mudah dan menyenangkan";

echo "Asli      : {$kalimat}\n";
echo "UPPERCASE : " . strtoupper($kalimat) . "\n";
echo "lowercase : " . strtolower($kalimat) . "\n";
echo "Ucfirst   : " . ucfirst($kalimat) . "\n";
echo "Ucwords   : " . ucwords($kalimat) . "\n";
