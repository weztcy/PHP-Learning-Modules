<?php
// Tipe data boolean hanya memiliki dua nilai: true atau false (case-insensitive).

$isLoggedIn = true;
$hasAdminRole = false;

echo "Status Login: " . ($isLoggedIn ? "TRUE (Sudah Login)" : "FALSE") . "\n";
echo "Status Admin: " . ($hasAdminRole ? "TRUE (Admin)" : "FALSE (Bukan Admin)") . "\n";

// Representasi internal boolean saat dikonversi ke string
echo "Representasi string true : '" . (string)$isLoggedIn . "'\n";
echo "Representasi string false: '" . (string)$hasAdminRole . "' (string kosong)\n";
