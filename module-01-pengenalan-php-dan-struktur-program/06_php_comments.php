<?php
// Komentar satu baris menggunakan tanda dua garis miring (//)
# Komentar satu baris juga dapat menggunakan tanda pagar (#) mirip bahasa shell/Python

/*
 * Komentar banyak baris (multi-line) menggunakan blok slash-bintang.
 * Sangat berguna untuk dokumentasi panjang atau menonaktifkan blok kode.
 */

/**
 * Contoh dokumentasi bergaya PHPDoc untuk fungsi atau kelas.
 * @param string $nama Nama pengguna
 * @return string Pesan sambutan
 */
function sapa(string $nama): string {
    return "Halo, {$nama}!";
}

echo sapa("Andi") . "\n";
echo "Komentar pada kode tidak akan dieksekusi oleh interpreter PHP.\n";
