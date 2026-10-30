<?php
// Type declarations menjamin keabsahan tipe data input parameter dan tipe data keluaran return.

function konversiSuhu(float $celsius): float {
    // Rumus konversi Celcius ke Fahrenheit: (C * 9/5) + 32
    return ($celsius * 9 / 5) + 32;
}

$c = 30.0;
$f = konversiSuhu($c);

echo "{$c}°C setara dengan {$f}°F\n";
