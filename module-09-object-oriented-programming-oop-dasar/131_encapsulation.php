<?php
// Enkapsulasi melindungi data dengan menjadikannya private dan menyediakan method publik untuk memanipulasinya.

class DompetDigital {
    private float $saldo = 0.0;

    public function isiSaldo(float $jumlah): void {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Top up berhasil: +Rp {$jumlah}\n";
        }
    }

    public function getSaldo(): float {
        return $this->saldo;
    }
}

$dompet = new DompetDigital();
$dompet->isiSaldo(150000);
echo "Saldo Dompet: Rp " . number_format($dompet->getSaldo(), 0, ',', '.') . "\n";
