<?php
// Readonly properties (PHP 8.1+) hanya dapat diinisialisasi satu kali di constructor dan tidak dapat diubah lagi.

class PenggunaSistem {
    public readonly string $username;

    public function __construct(string $username) {
        $this->username = $username;
    }
}

$user = new PenggunaSistem("admin_utama");
echo "Username Readonly: {$user->username}\n";
echo "Properti readonly menjamin integritas data tidak berubah saat runtime.\n";
