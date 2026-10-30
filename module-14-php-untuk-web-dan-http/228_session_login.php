<?php
// Simulasi autentikasi login dan pemeriksaan session login pengguna.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function prosesLogin(string $user, string $pass): bool {
    // Kredensial simulasi
    if ($user === "admin" && $pass === "rahasia123") {
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user'] = $user;
        return true;
    }
    return false;
}

$sukses = prosesLogin("admin", "rahasia123");

echo "=== Simulasi Login Berbasis Session ===\n";
if ($sukses && !empty($_SESSION['is_logged_in'])) {
    echo "Login berhasil! Selamat datang, " . $_SESSION['user'] . ".\n";
} else {
    echo "Login gagal! Kredensial tidak valid.\n";
}
