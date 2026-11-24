<?php
// Namespace mengelompokkan class, interface, function, dan constant untuk mencegah tabrakan nama (name collision).
namespace Aplikasi\Model;

class Pengguna {
    public function __construct(public string $nama) {}
}

// Mengakses class di dalam namespace saat ini
$user = new Pengguna("Ahmad Rivai");
echo "Class lengkap: " . get_class($user) . "\n";
echo "Nama User   : " . $user->nama . "\n";
