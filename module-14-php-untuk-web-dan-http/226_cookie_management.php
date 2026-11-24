<?php
// Pengelolaan cookie di browser menggunakan setcookie() dan superglobal $_COOKIE.

$cookieNama = "tema_tampilan";
$cookieNilai = "dark_mode";
$kadaluarsa = time() + (86400 * 30); // 30 hari ke depan

// Jika tidak di lingkungan server web, set cookie disimulasikan
if (php_sapi_name() !== 'cli') {
    setcookie($cookieNama, $cookieNilai, $kadaluarsa, "/");
}
$_COOKIE[$cookieNama] = $cookieNilai;

echo "=== Pengelolaan Cookie ===\n";
echo "Cookie Diset : {$cookieNama} = {$_COOKIE[$cookieNama]}\n";
echo "Masa Berlaku : 30 Hari\n";
