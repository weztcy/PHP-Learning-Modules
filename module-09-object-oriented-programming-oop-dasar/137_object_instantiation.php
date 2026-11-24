<?php
// Berbagai cara instansiasi object: kata kunci new, class dinamis, dan factory method.

class Kucing {
    public function bersuara(): string {
        return "Meow!";
    }
}

// 1. Instansiasi standar
$k1 = new Kucing();

// 2. Instansiasi nama class dinamis
$namaKelas = "Kucing";
$k2 = new $namaKelas();

echo "Kucing 1: " . $k1->bersuara() . "\n";
echo "Kucing 2: " . $k2->bersuara() . "\n";
