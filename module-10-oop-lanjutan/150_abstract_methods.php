<?php
// Abstract method hanya berupa deklarasi tanda tangan (signature) method tanpa implementasi bodi di class induk.

abstract class Notifikasi {
    abstract public function kirim(string $tujuan, string $pesan): bool;
}

class NotifikasiSms extends Notifikasi {
    public function kirim(string $tujuan, string $pesan): bool {
        echo "Mengirim SMS ke {$tujuan}: {$pesan}\n";
        return true;
    }
}

$sms = new NotifikasiSms();
$sms->kirim("08123456789", "Kode OTP Anda: 9921");
