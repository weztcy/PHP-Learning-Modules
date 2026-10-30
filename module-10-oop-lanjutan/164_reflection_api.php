<?php
// Reflection API digunakan untuk menginspeksi struktur internal class, interface, method, dan properties saat runtime.

class PesertaWorkshop {
    public function __construct(
        public string $nama,
        private int $usia
    ) {}

    public function sapa(): string {
        return "Halo {$this->nama}";
    }
}

$refleksi = new ReflectionClass(PesertaWorkshop::class);

echo "Nama Class      : " . $refleksi->getName() . "\n";
echo "Daftar Method   :\n";
foreach ($refleksi->getMethods() as $method) {
    echo "  - " . $method->getName() . "\n";
}

echo "Daftar Properti :\n";
foreach ($refleksi->getProperties() as $prop) {
    echo "  - " . $prop->getName() . " (" . ($prop->isPrivate() ? "private" : "public") . ")\n";
}
