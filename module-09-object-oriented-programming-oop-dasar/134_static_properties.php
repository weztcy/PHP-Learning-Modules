<?php
// Static properties dimiliki oleh Class secara keseluruhan, bukan per instans objek.

class KonfigurasiWeb {
    public static string $namaSitus = "Portal Pembelajaran PHP";
    public static int $pengunjung = 0;

    public static function catatPengunjung(): void {
        self::$pengunjung++;
    }
}

echo "Nama Situs: " . KonfigurasiWeb::$namaSitus . "\n";
KonfigurasiWeb::catatPengunjung();
KonfigurasiWeb::catatPengunjung();
echo "Total Kunjungan: " . KonfigurasiWeb::$pengunjung . "\n";
