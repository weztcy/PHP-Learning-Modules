<?php
// Operator == membandingkan kesamaan properti dan class.
// Operator === membandingkan apakah kedua variabel merujuk pada instans memori yang sama persis.

class Titik {
    public function __construct(public int $x, public int $y) {}
}

$p1 = new Titik(5, 10);
$p2 = new Titik(5, 10);
$p3 = $p1;

echo "p1 == p2 (nilai sama): " . var_export($p1 == $p2, true) . "\n";
echo "p1 === p2 (instans beda): " . var_export($p1 === $p2, true) . "\n";
echo "p1 === p3 (referensi sama): " . var_export($p1 === $p3, true) . "\n";
