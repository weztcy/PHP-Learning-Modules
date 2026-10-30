<?php
// Interface adalah kontrak perilaku murni yang mendefinisikan method publik yang wajib diimplementasikan.

interface LoggerInterface {
    public function log(string $pesan): void;
}

class FileLogger implements LoggerInterface {
    public function log(string $pesan): void {
        echo "[FileLog]: {$pesan}\n";
    }
}

$logger = new FileLogger();
$logger->log("Pencatatan aktivitas berhasil.");
