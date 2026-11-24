<?php
// Konsep dasar Unit Testing menggunakan Assertion runner bergaya PHPUnit.

class Kalkulator {
    public function tambah(int $a, int $b): int { return $a + $b; }
}

class KalkulatorTest {
    public function testTambah(): void {
        $calc = new Kalkulator();
        $hasil = $calc->tambah(4, 6);
        $harapan = 10;
        
        if ($hasil === $harapan) {
            echo "[PASS] testTambah: {$hasil} === {$harapan}\n";
        } else {
            echo "[FAIL] testTambah: didapat {$hasil}, diharapkan {$harapan}\n";
        }
    }
}

$test = new KalkulatorTest();
$test->testTambah();
