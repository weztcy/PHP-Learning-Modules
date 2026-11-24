<?php
// Tipe balik void menandakan bahwa fungsi tidak boleh mengembalikan nilai apa pun.
// Return kosong (return;) diperbolehkan hanya untuk menghentikan fungsi lebih awal.

function cetakGarisPemisah(int $panjang = 30): void {
    echo str_repeat("=", $panjang) . "\n";
}

cetakGarisPemisah();
echo " Konten Di Antara Dua Garis \n";
cetakGarisPemisah();
