<?php
// Konversi string menjadi array karakter:
// str_split() memecah string menjadi array karakter tunggal.

$sandi = "KODER";
$karakter = str_split($sandi);

echo "String asal: {$sandi}\n";
echo "Array karakter:\n";
foreach ($karakter as $pos => $char) {
    echo "  Karakter [{$pos}] = {$char}\n";
}
