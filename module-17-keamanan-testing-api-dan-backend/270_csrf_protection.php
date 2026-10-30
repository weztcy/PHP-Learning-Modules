<?php
// Proteksi Cross-Site Request Forgery (CSRF) dengan token kriptografis dan verifikasi hash_equals().

$tokenRahasiaSesi = bin2hex(random_bytes(32));

function validasiCsrfToken(string $tokenInput, string $tokenSesi): bool {
    // hash_equals mencegah serangan timing attack
    return hash_equals($tokenSesi, $tokenInput);
}

$tokenBenar = $tokenRahasiaSesi;
$tokenPalsu = "token_palsu_dari_situs_penyerang";

echo "Validasi Token Asli : " . (validasiCsrfToken($tokenBenar, $tokenRahasiaSesi) ? "BERHASIL" : "DITOLAK") . "\n";
echo "Validasi Token Palsu: " . (validasiCsrfToken($tokenPalsu, $tokenRahasiaSesi) ? "BERHASIL" : "DITOLAK") . "\n";
