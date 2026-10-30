<?php
// Verifikasi autentikasi API menggunakan Bearer Token pada HTTP Authorization header.

function periksaBearerToken(string $authHeader, string $validToken): bool {
    if (preg_match('/Bearer\s+(.*)$/i', $authHeader, $matches)) {
        return hash_equals($validToken, $matches[1]);
    }
    return false;
}

$secretToken = "TOKEN_API_RAHASIA_XYZ123";
$headerMasuk = "Bearer TOKEN_API_RAHASIA_XYZ123";

echo "Autentikasi Bearer Token: " . (periksaBearerToken($headerMasuk, $secretToken) ? "AKSES DITERIMA" : "401 UNAUTHORIZED") . "\n";
