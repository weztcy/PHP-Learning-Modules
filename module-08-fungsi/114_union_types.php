<?php
// Union types (PHP 8.0+) memungkinkan parameter atau return value menerima lebih dari satu tipe (tipe1|tipe2).

function cetakFormatUang(int|float $nominal): string {
    return "Rp " . number_format($nominal, 2, ',', '.');
}

echo cetakFormatUang(50000) . " (dari integer)\n";
echo cetakFormatUang(125000.75) . " (dari float)\n";
