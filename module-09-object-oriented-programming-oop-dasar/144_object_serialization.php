<?php
// serialize() mengubah objek menjadi representasi string bita, dan unserialize() mengembalikannya menjadi objek utuh.

class PengaturanAkun {
    public function __construct(
        public string $tema,
        public bool $notifikasi
    ) {}
}

$opsi = new PengaturanAkun("gelap", true);

// Serialisasi
$serialized = serialize($opsi);
echo "String Serialized: {$serialized}\n";

// Deserialisasi
$pulih = unserialize($serialized);
echo "Objek Pulih - Tema: {$pulih->tema}, Notif: " . var_export($pulih->notifikasi, true) . "\n";
