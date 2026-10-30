<?php
// Praktik terbaik keamanan session: session_regenerate_id, cookie httponly, samesite.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$idLama = session_id();
// Regenerasi ID session saat eskalasi privilege (misal setelah login) untuk mencegah session fixation
session_regenerate_id(true);
$idBaru = session_id();

echo "ID Session Sebelum Login : {$idLama}\n";
echo "ID Session Setelah Login : {$idBaru}\n";
echo "Regenerasi ID mencegah serangan Session Fixation.\n";
