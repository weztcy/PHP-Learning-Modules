<?php
// Match expression (diperkenalkan pada PHP 8.0) adalah alternatif modern dan ringkas dari switch.
// Keunggulan match: strict comparison (===), mengembalikan nilai langsung, dan tanpa fall-through.

$statusPesanan = "processing";

$pesanStatus = match ($statusPesanan) {
    "pending"    => "Pesanan menunggu pembayaran.",
    "processing" => "Pesanan sedang disiapkan di gudang.",
    "shipped"    => "Pesanan dalam perjalanan pengiriman.",
    "delivered"  => "Pesanan telah sampai di tujuan.",
    default      => "Status pesanan tidak dikenali."
};

echo "Status: {$statusPesanan}\n";
echo "Keterangan: {$pesanStatus}\n";
