<?php
// Konsep Property Hooks (PHP 8.4+) memungkinkan get dan set didefinisikan langsung pada deklarasi properti.
// Pada runtime PHP 8.3, demonstrasi ini memperlihatkan paradigma Property Hooks menggunakan pola enkapsulasi modern.

class AkunPenggunaModern {
    private string $_namaDepan;
    private string $_namaBelakang;

    public function __construct(string $depan, string $belakang) {
        $this->_namaDepan = $depan;
        $this->_namaBelakang = $belakang;
    }

    // Simulasi Property Hook 'get' untuk namaLengkap
    public function getNamaLengkap(): string {
        return "{$this->_namaDepan} {$this->_namaBelakang}";
    }

    // Simulasi Property Hook 'set' dengan sanitasi otomatis
    public function setNamaDepan(string $val): void {
        $this->_namaDepan = ucfirst(trim($val));
    }
}

$user = new AkunPenggunaModern("anita", "wijaya");
echo "Nama Lengkap (Hook Get): " . $user->getNamaLengkap() . "\n";
$user->setNamaDepan("dewi");
echo "Setelah modifikasi (Hook Set): " . $user->getNamaLengkap() . "\n";
echo "Property hooks menyederhanakan kode boilerplate getter dan setter.\n";
