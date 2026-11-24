<?php
// Heredoc (<<<EOD) mengevaluasi variabel seperti string petik ganda.
// Nowdoc (<<<'EOD') mengabaikan variabel seperti string petik tunggal.

$aplikasi = "Sistem Akademik";
$versi = "2.0";

// 1. Heredoc (variabel di dalam teks akan dievaluasi)
$teksHeredoc = <<<INFO
Aplikasi: {$aplikasi}
Versi   : {$versi}
Status  : Siap digunakan
INFO;

// 2. Nowdoc (tanda petik pada identifier pembuka, variabel tidak dievaluasi)
$teksNowdoc = <<<'KODE'
Contoh kode sumber:
echo "Selamat belajar {$aplikasi}";
KODE;

echo "=== Teks Heredoc ===\n{$teksHeredoc}\n\n";
echo "=== Teks Nowdoc ===\n{$teksNowdoc}\n";
