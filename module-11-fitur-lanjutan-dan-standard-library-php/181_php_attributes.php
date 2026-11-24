<?php
// Metadata Attribute dapat dibaca menggunakan ReflectionClass dan ReflectionMethod.

#[Attribute]
class HakAkses {
    public function __construct(public string $level) {}
}

class DashboardAdmin {
    #[HakAkses("SUPERADMIN")]
    public function bukaLaporan(): void {
        echo "Laporan dibuka.\n";
    }
}

$ref = new ReflectionMethod(DashboardAdmin::class, 'bukaLaporan');
$attrs = $ref->getAttributes(HakAkses::class);

foreach ($attrs as $attr) {
    $instans = $attr->newInstance();
    echo "Method 'bukaLaporan' dilindungi oleh HakAkses level: " . $instans->level . "\n";
}
