<?php
// Composer scripts menjalankan perintah kustom CLI saat fase tertentu (test, lint, build).

$scripts = [
    "scripts" => [
        "test" => "phpunit --testdox",
        "check-style" => "phpcs --standard=PSR12 src/",
        "start" => "php -S localhost:8000 -t public/"
    ]
];

echo "=== Perintah Skrip Composer ===\n";
foreach ($scripts['scripts'] as $nama => $perintah) {
    echo "composer {$nama} -> '{$perintah}'\n";
}
