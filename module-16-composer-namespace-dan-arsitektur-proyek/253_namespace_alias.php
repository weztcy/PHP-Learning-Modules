<?php
// Kata kunci 'as' memberikan alias nama baru pada class yang diimpor untuk memperjelas konteks atau mengatasi konflik nama.

namespace Modul\Keuangan;
class Transaksi {
    public function info(): string { return "Transaksi Pembayaran"; }
}

namespace Modul\Logistik;
class Transaksi {
    public function info(): string { return "Transaksi Pengiriman"; }
}

namespace Modul\Aplikasi;
use Modul\Keuangan\Transaksi as TrxBayar;
use Modul\Logistik\Transaksi as TrxKirim;

$t1 = new TrxBayar();
$t2 = new TrxKirim();

echo "1. " . $t1->info() . "\n";
echo "2. " . $t2->info() . "\n";
