<?php
// File ini mendemonstrasikan eksekusi skrip PHP melalui Command Line Interface (CLI).
// Variabel bawaan $argc menyimpan jumlah argumen, dan $argv menyimpan daftar argumen.

echo "=== Informasi Eksekusi PHP CLI ===\n";
echo "SAPI (Server API): " . php_sapi_name() . "\n";
echo "Jumlah argumen (\$argc): " . $argc . "\n";

echo "Daftar argumen (\$argv):\n";
foreach ($argv as $index => $arg) {
    echo "  [{$index}] => {$arg}\n";
}

echo "Skrip dijalankan langsung dari terminal konsol.\n";
