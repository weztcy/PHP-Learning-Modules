<?php
// Tipe data float (floating point / double) merepresentasikan bilangan pecahan atau berkoma.
// PHP juga mendukung notasi ilmiah (scientific notation dengan e/E).

$harga = 19999.75;
$koefisien = 1.25e3;  // 1.25 * 10^3 = 1250
$mikro = 7.5e-3;      // 0.0075

echo "Harga Barang       : Rp " . number_format($harga, 2, ',', '.') . "\n";
echo "Notasi Ilmiah 1.25e3: {$koefisien}\n";
echo "Notasi Ilmiah 7.5e-3: {$mikro}\n";
echo "Presisi Float       : " . PHP_FLOAT_DIG . " digit\n";
