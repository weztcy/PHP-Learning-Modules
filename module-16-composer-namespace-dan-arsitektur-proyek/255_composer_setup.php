<?php
// Composer adalah manajer dependensi resmi untuk ekosistem PHP.
// Konfigurasi didefinisikan dalam file composer.json.

$composerJson = [
    "name" => "belajar/php-modules",
    "description" => "Kurikulum Pembelajaran PHP Lengkap",
    "type" => "project",
    "require" => [
        "php" => "^8.2"
    ],
    "autoload" => [
        "psr-4" => [
            "App\\" => "src/"
        ]
    ]
];

echo "=== Struktur composer.json ===\n";
echo json_encode($composerJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n";
