<?php
// Parser sederhana untuk berkas .env (konsep library vlucas/phpdotenv).

function muatFileDotenv(string $konten): array {
    $env = [];
    $baris = explode("\n", $konten);
    foreach ($baris as $b) {
        $b = trim($b);
        if ($b === '' || str_starts_with($b, '#')) continue;
        [$kunci, $nilai] = explode('=', $b, 2);
        $env[trim($kunci)] = trim($nilai);
    }
    return $env;
}

$simulasiEnv = "DB_HOST=127.0.0.1\nDB_PORT=3306\nDB_NAME=toko_db\n";
$config = muatFileDotenv($simulasiEnv);

echo "=== Konfigurasi dari .env ===\n";
foreach ($config as $k => $v) {
    echo "{$k} = {$v}\n";
}
