<?php
// DateTimeImmutable memastikan objek waktu tidak berubah saat dilakukan operasi modifikasi.
// Setiap modifikasi menghasilkan objek baru yang independen.

$waktuAwal = new DateTimeImmutable("2026-10-18 09:00:00");
$waktuJatuhTempo = $waktuAwal->modify("+1 month");

echo "Waktu Awal        : " . $waktuAwal->format("Y-m-d H:i:s") . "\n";
echo "Waktu Jatuh Tempo : " . $waktuJatuhTempo->format("Y-m-d H:i:s") . "\n";
echo "Immutability terjamin: Objek asal tetap utuh tanpa mutasi.\n";
