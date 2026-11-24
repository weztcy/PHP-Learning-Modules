<?php
// Mocking mengisolasi unit pengujian dengan membuat objek tiruan (mock/stub) untuk dependensi eksternal.

interface GatewayPembayaran {
    public function bayar(float $jumlah): bool;
}

// Objek Mock simulasi
class MockGatewayPembayaran implements GatewayPembayaran {
    public function bayar(float $jumlah): bool {
        echo "[MOCK]: Pembayaran Rp {$jumlah} disimulasikan SUKSES tanpa memotong uang asli.\n";
        return true;
    }
}

$mock = new MockGatewayPembayaran();
$hasil = $mock->bayar(150000);
echo "Pengujian Unit Terisolasi Berhasil: " . ($hasil ? "TRUE" : "FALSE") . "\n";
