<?php
// debug_backtrace() menghasilkan jejak rantai pemanggilan fungsi (call stack) saat program dieksekusi.

function tingkatKetiga(): void {
    $trace = debug_backtrace();
    echo "=== Jejak Pemanggilan Fungsi (Call Stack) ===\n";
    foreach ($trace as $indeks => $langkah) {
        $fungsi = $langkah['function'] ?? 'main';
        $baris = $langkah['line'] ?? '-';
        echo "Level [{$indeks}] => Fungsi '{$fungsi}' pada baris {$baris}\n";
    }
}

function tingkatKedua(): void {
    tingkatKetiga();
}

function tingkatPertama(): void {
    tingkatKedua();
}

tingkatPertama();
