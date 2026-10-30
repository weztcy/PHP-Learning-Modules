<?php
// Enums (PHP 8.1+) mendefinisikan sekumpulan nilai konstanta yang aman secara tipe (type-safe).

enum StatusTiket {
    case Terbuka;
    case Diproses;
    case Ditutup;
}

$statusSaatIni = StatusTiket::Diproses;

if ($statusSaatIni === StatusTiket::Diproses) {
    echo "Status tiket: " . $statusSaatIni->name . "\n";
}
