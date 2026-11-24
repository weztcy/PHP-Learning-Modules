<?php
// Verifikasi kecocokan kata sandi menggunakan password_verify().

$hashTersimpan = password_hash("admin123", PASSWORD_BCRYPT);

$ujiBenar = "admin123";
$ujiSalah = "adminSalah";

echo "Verifikasi password benar: " . (password_verify($ujiBenar, $hashTersimpan) ? "VALID" : "TIDAK COCOK") . "\n";
echo "Verifikasi password salah: " . (password_verify($ujiSalah, $hashTersimpan) ? "VALID" : "TIDAK COCOK") . "\n";
