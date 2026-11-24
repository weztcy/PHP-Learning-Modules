<?php
// filter_var() memvalidasi dan membersihkan data menggunakan filter standar PHP.

$emailUji = "info@antigravity.test";
$ipUji = "192.168.1.1";
$angkaUji = "125";

echo "Validasi Email : " . (filter_var($emailUji, FILTER_VALIDATE_EMAIL) ? "VALID" : "TIDAK VALID") . "\n";
echo "Validasi Alamat IP: " . (filter_var($ipUji, FILTER_VALIDATE_IP) ? "VALID" : "TIDAK VALID") . "\n";
echo "Validasi Integer  : " . (filter_var($angkaUji, FILTER_VALIDATE_INT) !== false ? "VALID" : "TIDAK VALID") . "\n";
