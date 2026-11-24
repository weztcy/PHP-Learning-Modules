<?php
// Dependency Injection (DI) memasukkan objek dependensi dari luar (misal lewat constructor) agar kode decoupled dan mudah diuji.

interface PengirimPesan {
    public function kirim(string $isi): void;
}

class EmailService implements PengirimPesan {
    public function kirim(string $isi): void {
        echo "Mengirim Email: {$isi}\n";
    }
}

class NotifikasiOrder {
    // Dependensi diinjeksi melalui constructor
    public function __construct(private PengirimPesan $pengirim) {}

    public function konfirmasi(): void {
        $this->pengirim->kirim("Pesanan #101 berhasil dibayar.");
    }
}

$order = new NotifikasiOrder(new EmailService());
$order->konfirmasi();
