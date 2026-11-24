<?php
// Nullsafe operator (?->) diperkenalkan di PHP 8.0 untuk menghindari error fatal 'call to a member function on null'.
// Jika object bernilai null, seluruh rantai pemanggilan langsung mengembalikan null tanpa error.

class Profil {
    public function getKota(): string {
        return "Bandung";
    }
}

class Pengguna {
    public ?Profil $profil = null;
}

$user1 = new Pengguna();
$user1->profil = new Profil();

$user2 = new Pengguna(); // profil bernilai null

// Mengakses method getKota() dengan nullsafe operator
$kota1 = $user1->profil?->getKota();
$kota2 = $user2->profil?->getKota();

echo "Kota Pengguna 1: " . ($kota1 ?? "Tidak tersedia") . "\n";
echo "Kota Pengguna 2: " . ($kota2 ?? "Tidak tersedia") . "\n";
