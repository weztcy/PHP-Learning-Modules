<?php
// htmlspecialchars() mencegah serangan Cross-Site Scripting (XSS) dengan mengubah karakter khusus ke HTML entities.

$inputUser = "<script>alert('XSS Terdeteksi!');</script>";

// Mengamankan string dengan ENT_QUOTES
$escaped = htmlspecialchars($inputUser, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');

echo "=== Pencegahan Serangan XSS ===\n";
echo "Input Asli : {$inputUser}\n";
echo "Hasil Escape: {$escaped}\n";
echo "Output aman untuk dirender ke dalam dokumen HTML.\n";
