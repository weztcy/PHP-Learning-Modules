<?php
// Validasi format menggunakan pola Regular Expression: format alamat email sederhana.

function validasiEmail(string $email): bool {
    // Pola pengecekan format username@domain.ext
    $pola = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    return (bool)preg_match($pola, $email);
}

$daftarUji = [
    "user@domain.com",
    "budi.santoso@kampus.ac.id",
    "email-salah@tanpatld",
    "bukan_email"
];

echo "=== Validasi Email dengan Regex ===\n";
foreach ($daftarUji as $item) {
    $status = validasiEmail($item) ? "VALID" : "TIDAK VALID";
    echo "{$item} => {$status}\n";
}
