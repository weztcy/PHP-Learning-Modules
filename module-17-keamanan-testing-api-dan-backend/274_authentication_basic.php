<?php
// Sistem autentikasi sederhana memeriksa kecocokan username dan password.

$databasePengguna = [
    "admin" => password_hash("supersecret", PASSWORD_DEFAULT)
];

function autentikasi(string $username, string $password, array $db): bool {
    if (!isset($db[$username])) {
        return false;
    }
    return password_verify($password, $db[$username]);
}

echo "Autentikasi admin (pass benar): " . (autentikasi("admin", "supersecret", $databasePengguna) ? "BERHASIL" : "GAGAL") . "\n";
echo "Autentikasi admin (pass salah): " . (autentikasi("admin", "123456", $databasePengguna) ? "BERHASIL" : "GAGAL") . "\n";
