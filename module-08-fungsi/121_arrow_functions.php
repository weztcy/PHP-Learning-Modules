<?php
// Arrow function (fn(...) => ekspresi) memiliki sintaks ringkas dan secara otomatis menangkap variabel dari scope luar.

$faktor = 10;

// Arrow function otomatis meng-capture $faktor by value
$kaliFaktor = fn(int $x): int => $x * $faktor;

echo "Arrow function (7 * 10): " . $kaliFaktor(7) . "\n";
