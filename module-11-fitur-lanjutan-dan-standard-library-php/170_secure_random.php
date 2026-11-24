<?php
// Bilangan acak kriptografis (CSPRNG) wajib digunakan untuk token keamanan, OTP, dan password reset.

$kodeOtp = random_int(100000, 999999);
$tokenBita = random_bytes(16);
$tokenHeksa = bin2hex($tokenBita);

echo "Kode OTP Kriptografis : {$kodeOtp}\n";
echo "Token CSRF/Reset (32 char): {$tokenHeksa}\n";
