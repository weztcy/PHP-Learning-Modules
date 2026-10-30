<?php
// Array destructuring memungkinkan pembongkaran nilai array langsung ke variabel individu.

// 1. Destructuring pada indexed array
$koordinat = [107.6191, -6.9175];
[$bujur, $lintang] = $koordinat;

echo "Bujur  : {$bujur}\n";
echo "Lintang: {$lintang}\n";

// 2. Destructuring dengan kunci spesifik (PHP 7.1+)
$pengguna = ["username" => "admin", "role" => "Super Administrator"];
["username" => $user, "role" => $peran] = $pengguna;

echo "Pengguna: {$user} ({$peran})\n";
