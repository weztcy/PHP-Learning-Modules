<?php
// Pengelolaan konfigurasi terpusat menggunakan Class berbasis pola Singleton / Static Repository.

class Config {
    private static array $items = [
        "app.name" => "Sistem Penjualan",
        "app.timezone" => "Asia/Jakarta",
        "mail.driver" => "smtp"
    ];

    public static function get(string $key, mixed $default = null): mixed {
        return self::$items[$key] ?? $default;
    }
}

echo "Nama Aplikasi : " . Config::get("app.name") . "\n";
echo "Zona Waktu    : " . Config::get("app.timezone") . "\n";
echo "Pengaturan Debug: " . var_export(Config::get("app.debug", false), true) . "\n";
