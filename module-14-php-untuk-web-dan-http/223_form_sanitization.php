<?php
// Sanitasi membersihkan karakter berbahaya dari input pengguna sebelum diproses lebih lanjut.

$inputKotor = "<script>alert('hack');</script> user@example.com  ";

// 1. Sanitasi email
$emailBersih = filter_var(trim($inputKotor), FILTER_SANITIZE_EMAIL);

// 2. Sanitasi string dari tag HTML
$teksBersih = strip_tags($inputKotor);

echo "Input Kotor    : {$inputKotor}\n";
echo "Email Bersih   : {$emailBersih}\n";
echo "Teks Tanpa Tag : " . trim($teksBersih) . "\n";
