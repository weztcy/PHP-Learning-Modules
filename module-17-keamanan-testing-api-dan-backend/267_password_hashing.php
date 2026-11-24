<?php
// Hashing password aman menggunakan password_hash() dengan algoritma bcrypt/Argon2.

$kataSandiAsli = "RahasiaKuat#2026";

// Menghasilkan hash satu arah yang aman dengan salt unik otomatis
$hashSandi = password_hash($kataSandiAsli, PASSWORD_BCRYPT);

echo "Kata Sandi Asli : {$kataSandiAsli}\n";
echo "Hasil Hash Bcrypt: {$hashSandi}\n";
echo "Panjang Hash     : " . strlen($hashSandi) . " karakter\n";
