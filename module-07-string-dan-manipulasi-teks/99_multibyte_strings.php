<?php
// Fungsi mb_* menangani karakter multibita seperti huruf beraksen, tulisan Arab, Jepang, atau Emoji.
// strlen biasa menghitung jumlah bita (emoji bisa 4 bita), sedangkan mb_strlen menghitung jumlah karakter visual.

$teksMultibita = "Selamat Pagi! 🌟";

$panjangBita = strlen($teksMultibita);
$panjangKarakter = mb_strlen($teksMultibita, 'UTF-8');

echo "Teks Multibita : {$teksMultibita}\n";
echo "Panjang Bita (strlen)    : {$panjangBita} bita\n";
echo "Panjang Karakter (mb_strlen): {$panjangKarakter} karakter\n";
