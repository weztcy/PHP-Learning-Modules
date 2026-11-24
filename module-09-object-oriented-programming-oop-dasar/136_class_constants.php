<?php
// Class constants adalah nilai tetap (immutable) yang terikat pada class.

class Lingkaran {
    public const PI = 3.14159;

    public static function hitungLuas(float $jariJari): float {
        return self::PI * ($jariJari ** 2);
    }
}

echo "Konstanta PI: " . Lingkaran::PI . "\n";
echo "Luas Lingkaran r=10: " . Lingkaran::hitungLuas(10) . "\n";
