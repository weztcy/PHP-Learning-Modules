<?php
// Membuat class Exception khusus dengan mewarisi Exception bawaan PHP.

class SaldoTidakCukupException extends Exception {
    public function __construct(public int $saldoTersedia, public int $nominalDiminta) {
        parent::__construct("Saldo Rp {$saldoTersedia} tidak mencukupi untuk menarik Rp {$nominalDiminta}.");
    }
}

try {
    throw new SaldoTidakCukupException(25000, 100000);
} catch (SaldoTidakCukupException $e) {
    echo "Custom Exception: " . $e->getMessage() . "\n";
    echo "Nominal diminta: Rp " . $e->nominalDiminta . "\n";
}
