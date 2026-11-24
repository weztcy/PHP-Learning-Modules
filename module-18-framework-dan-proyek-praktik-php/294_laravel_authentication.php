<?php
// Simulasi penanganan autentikasi login bergaya Auth::attempt().

class Auth {
    private static ?string $loggedInUser = null;

    public static function attempt(string $user, string $pass): bool {
        if ($user === "admin@laravel.test" && $pass === "password") {
            self::$loggedInUser = $user;
            return true;
        }
        return false;
    }

    public static function user(): ?string {
        return self::$loggedInUser;
    }
}

if (Auth::attempt("admin@laravel.test", "password")) {
    echo "Auth::attempt BERHASIL! Pengguna aktif: " . Auth::user() . "\n";
} else {
    echo "Auth::attempt GAGAL!\n";
}
