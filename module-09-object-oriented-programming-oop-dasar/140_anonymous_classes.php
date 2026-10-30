<?php
// Anonymous class berguna saat objek sederhana sekali pakai diperlukan tanpa harus mendefinisikan class bernama.

$logger = new class {
    public function log(string $pesan): void {
        echo "[LOG AKTIF]: {$pesan}\n";
    }
};

$logger->log("Pemeriksaan status sistem selesai.");
