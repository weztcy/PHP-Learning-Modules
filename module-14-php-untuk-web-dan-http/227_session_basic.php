<?php
// Session menyimpan data antar request di sisi server.
// session_start() wajib dipanggil sebelum membaca atau menulis ke $_SESSION.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['username'] = "budi_santoso";
$_SESSION['role'] = "editor";

echo "=== Session Dasar ===\n";
echo "Session ID: " . session_id() . "\n";
echo "User Login: " . $_SESSION['username'] . " (Peran: " . $_SESSION['role'] . ")\n";
