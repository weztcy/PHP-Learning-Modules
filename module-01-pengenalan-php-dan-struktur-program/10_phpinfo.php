<?php
// phpinfo() menampilkan informasi konfigurasi modul, versi, dan lingkungan PHP.
// Dalam mode CLI, kita juga dapat membaca konstanta sistem penting dan fungsi bawaan.

echo "=== Informasi Lingkungan Runtime PHP ===\n";
echo "PHP Version       : " . PHP_VERSION . "\n";
echo "PHP OS            : " . PHP_OS . "\n";
echo "Zend Engine Versi : " . zend_version() . "\n";
echo "Ukuran Integer Max: " . PHP_INT_MAX . "\n";
echo "Memory Limit      : " . ini_get('memory_limit') . "\n";
echo "Default Timezone  : " . date_default_timezone_get() . "\n";
echo "Sistem siap digunakan untuk pembelajaran PHP.\n";
