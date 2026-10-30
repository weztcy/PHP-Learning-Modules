<?php
// Kata kunci throw digunakan untuk melempar objek Exception ketika kondisi abnormal terdeteksi.

function cekSaldoRekening(int $saldo, int $tarik): void {
    if ($tarik > $saldo) {
        throw new InvalidArgumentException("Penarikan Rp {$tarik} melebihi saldo Rp {$saldo}!");
    }
    echo "Penarikan Rp {$tarik} berhasil disetujui.\n";
}

try {
    cekSaldoRekening(100000, 150000);
} catch (InvalidArgumentException $e) {
    echo "Peringatan Bank: " . $e->getMessage() . "\n";
}
