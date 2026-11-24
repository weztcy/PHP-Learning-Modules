<?php
// Struktur if-elseif-else digunakan ketika terdapat lebih dari dua alternatif kondisi yang saling bertentangan.

$suhuAir = 75;

echo "Suhu air: {$suhuAir}°C\n";

if ($suhuAir <= 0) {
    echo "Wujud zat: Padat (Es Beku)\n";
} elseif ($suhuAir < 100) {
    echo "Wujud zat: Cair (Air Normal)\n";
} else {
    echo "Wujud zat: Gas (Uap Air)\n";
}
