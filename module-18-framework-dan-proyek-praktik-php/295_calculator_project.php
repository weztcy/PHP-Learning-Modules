<?php
// Proyek Praktik 1: Aplikasi Kalkulator Lengkap Berorientasi Objek.

class KalkulatorLengkap {
    private array $riwayat = [];

    public function hitung(float $a, string $operator, float $b): float {
        $hasil = match ($operator) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => ($b != 0) ? $a / $b : throw new InvalidArgumentException("Pembagian dengan nol!"),
            '^' => $a ** $b,
            default => throw new InvalidArgumentException("Operator tidak valid")
        };

        $this->riwayat[] = "{$a} {$operator} {$b} = {$hasil}";
        return $hasil;
    }

    public function cetakRiwayat(): void {
        echo "=== Riwayat Perhitungan Kalkulator ===\n";
        foreach ($this->riwayat as $idx => $r) {
            echo ($idx + 1) . ". {$r}\n";
        }
    }
}

$kalk = new KalkulatorLengkap();
$kalk->hitung(12, '+', 8);
$kalk->hitung(50, '-', 15);
$kalk->hitung(6, '*', 7);
$kalk->hitung(100, '/', 4);
$kalk->hitung(2, '^', 8);
$kalk->cetakRiwayat();
