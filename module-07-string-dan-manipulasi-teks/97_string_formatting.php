<?php
// sprintf() menghasilkan string berformat rapi menggunakan penanda format (%s, %d, %0.2f).

$namaProduk = "Meja Belajar";
$jumlah = 3;
$hargaSatuan = 250000.50;

$pesan = sprintf("Pesanan: %s | Qty: %02d unit | Harga: Rp %0.2f", $namaProduk, $jumlah, $hargaSatuan);

echo "=== Format String dengan sprintf() ===\n";
echo $pesan . "\n";
