<?php
// Methods adalah fungsi yang didefinisikan di dalam class untuk mengatur perilakunya.

class AkunBank {
    public int $saldo = 500000;

    public function cekSaldo(): string {
        return "Saldo rekening: Rp " . number_format($this->saldo, 0, ',', '.');
    }
}

$akun = new AkunBank();
echo $akun->cekSaldo() . "\n";
