<?php
// Mengatur kode status HTTP respons menggunakan http_response_code().

function kirimRespon(int $statusCode, string $pesan): void {
    if (php_sapi_name() !== 'cli') {
        http_response_code($statusCode);
    }
    echo "HTTP Status Code [{$statusCode}]: {$pesan}\n";
}

kirimRespon(200, "200 OK - Permintaan Berhasil.");
kirimRespon(404, "404 Not Found - Sumber daya tidak ditemukan.");
kirimRespon(500, "500 Internal Server Error - Terjadi kesalahan server.");
