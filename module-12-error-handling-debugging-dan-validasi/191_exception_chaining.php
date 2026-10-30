<?php
// Exception chaining menghubungkan exception tingkat rendah ke exception tingkat tinggi melalui parameter $previous.

class DatabaseException extends Exception {}
class OrderProcessingException extends Exception {}

function simpanPesanan(): void {
    try {
        // Simulasi error koneksi DB
        throw new DatabaseException("Koneksi server database timeout.");
    } catch (DatabaseException $dbError) {
        // Membungkus ke exception tingkat bisnis dengan menyertakan error asal
        throw new OrderProcessingException("Gagal menyelesaikan checkout pesanan.", 0, $dbError);
    }
}

try {
    simpanPesanan();
} catch (OrderProcessingException $e) {
    echo "Error Utama  : " . $e->getMessage() . "\n";
    echo "Penyebab Asal: " . $e->getPrevious()->getMessage() . "\n";
}
