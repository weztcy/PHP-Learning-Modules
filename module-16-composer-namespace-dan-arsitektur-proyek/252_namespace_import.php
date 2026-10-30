<?php
// Kata kunci 'use' mengimpor class dari namespace lain sehingga dapat dipanggil tanpa menuliskan namespace lengkap.

namespace Aplikasi\Layanan;

class NotifikasiSms {
    public function kirim(string $pesan): void {
        echo "SMS terkirim: {$pesan}\n";
    }
}

namespace Aplikasi\Utama;

// Mengimpor class NotifikasiSms dari namespace Aplikasi\Layanan
use Aplikasi\Layanan\NotifikasiSms;

$sms = new NotifikasiSms();
$sms->kirim("Selamat, akun Anda aktif.");
