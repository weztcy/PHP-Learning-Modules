<?php
// WeakReference mereferensikan objek tanpa mencegah garbage collector menghancurkan objek tersebut.

class SesiUser {
    public function __construct(public string $token) {}
}

$sesi = new SesiUser("TOKEN-XYZ-123");
$weakRef = WeakReference::create($sesi);

echo "Status objek via WeakRef: " . ($weakRef->get() !== null ? "Masih Ada di Memori" : "Sudah Dihapus") . "\n";

unset($sesi); // Menghancurkan objek utama

echo "Setelah unset(\$sesi)    : " . ($weakRef->get() !== null ? "Masih Ada" : "Telah Dihapus (Garbage Collected)") . "\n";
