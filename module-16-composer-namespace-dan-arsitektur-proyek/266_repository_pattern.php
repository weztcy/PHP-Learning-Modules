<?php
// Repository Pattern menyediakan abstraksi lapisan data menggunakan Interface kontrak.

interface PelangganRepositoryInterface {
    public function findById(int $id): ?array;
}

class InMemoryPelangganRepository implements PelangganRepositoryInterface {
    private array $data = [
        1 => ["id" => 1, "nama" => "Gunawan", "saldo" => 250000]
    ];

    public function findById(int $id): ?array {
        return $this->data[$id] ?? null;
    }
}

$repo = new InMemoryPelangganRepository();
$pelanggan = $repo->findById(1);

echo "Pola Repositori: Data ID 1 = " . $pelanggan['nama'] . " (Saldo: Rp " . number_format($pelanggan['saldo'], 0, ',', '.') . ")\n";
