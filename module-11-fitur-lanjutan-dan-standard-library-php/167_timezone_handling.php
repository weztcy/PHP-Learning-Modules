<?php
// Mengatur dan mengonversi zona waktu menggunakan DateTimeZone.

$waktuJakarta = new DateTime("now", new DateTimeZone("Asia/Jakarta"));
echo "Waktu Indonesia Barat (WIB) : " . $waktuJakarta->format("Y-m-d H:i:s T") . "\n";

// Konversi ke zona waktu UTC
$waktuUtc = clone $waktuJakarta;
$waktuUtc->setTimezone(new DateTimeZone("UTC"));
echo "Waktu Global Universal (UTC): " . $waktuUtc->format("Y-m-d H:i:s T") . "\n";
