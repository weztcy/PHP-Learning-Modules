<?php
// Regular Expressions (Regex) digunakan untuk pencocokan pola teks menggunakan preg_match().

$teks = "Nomor kontak darurat kami adalah 08123456789.";
$pola = "/08[0-9]{8,11}/"; // Format nomor telepon seluler Indonesia

if (preg_match($pola, $teks, $hasil)) {
    echo "Pola nomor telepon cocok!\n";
    echo "Nomor yang ditemukan: " . $hasil[0] . "\n";
} else {
    echo "Nomor telepon tidak ditemukan.\n";
}
