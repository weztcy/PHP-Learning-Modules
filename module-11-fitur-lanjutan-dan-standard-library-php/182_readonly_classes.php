<?php
// Readonly class (PHP 8.2+) secara otomatis membuat seluruh propertinya bertipe readonly.

readonly class DataKeluaran {
    public function __construct(
        public int $id,
        public string $kode,
        public float $total
    ) {}
}

$data = new DataKeluaran(101, "INV-001", 750000.0);
echo "ID: {$data->id} | Kode: {$data->kode} | Total: Rp {$data->total}\n";
echo "Readonly class menjamin seluruh atribut immutable.\n";
