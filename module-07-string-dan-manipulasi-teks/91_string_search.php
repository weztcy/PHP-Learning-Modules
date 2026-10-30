<?php
// Fungsi pencarian teks modern di PHP 8:
// str_contains(), str_starts_with(), str_ends_with(), dan strpos()

$email = "developer@example.com";

echo "Email yang diuji: {$email}\n";
echo "Mengandung '@'?    : " . (str_contains($email, '@') ? "Ya" : "Tidak") . "\n";
echo "Diawali 'dev'?     : " . (str_starts_with($email, 'dev') ? "Ya" : "Tidak") . "\n";
echo "Diakhiri '.com'?   : " . (str_ends_with($email, '.com') ? "Ya" : "Tidak") . "\n";
