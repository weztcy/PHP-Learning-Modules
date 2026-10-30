<?php
// Percabangan if-else menyediakan dua jalur eksekusi:
// Jalur if jika kondisi bernilai true, dan jalur else jika kondisi bernilai false.

$umur = 16;
$batasUmurKtp = 17;

echo "Umur pendaftar: {$umur} tahun\n";

if ($umur >= $batasUmurKtp) {
    // Kondisi terpenuhi: umur sudah cukup
    echo "Selamat! Anda memenuhi syarat untuk membuat KTP.\n";
} else {
    // Kondisi tidak terpenuhi: umur belum cukup
    $kekurangan = $batasUmurKtp - $umur;
    echo "Maaf, Anda belum cukup umur. Tunggu {$kekurangan} tahun lagi.\n";
}
