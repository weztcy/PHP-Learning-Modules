<?php
// Anonymous function (fungsi tanpa nama / lambda) dapat disimpan dalam variabel atau dipassing sebagai argumen.

$pengali = function (int $angka): int {
    return $angka * 2;
};

echo "Hasil lambda (5 * 2): " . $pengali(5) . "\n";
echo "Tipe data lambda: " . get_class($pengali) . "\n";
