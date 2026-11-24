<?php
// Membaca variabel environment runtime menggunakan getenv() dan $_ENV.

putenv("APP_ENV=development");
putenv("APP_PORT=8080");

$env = getenv("APP_ENV") ?: "production";
$port = getenv("APP_PORT") ?: "80";

echo "Lingkungan Aplikasi: {$env}\n";
echo "Port Server        : {$port}\n";
