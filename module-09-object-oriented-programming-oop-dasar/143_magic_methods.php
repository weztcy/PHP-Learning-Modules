<?php
// Magic methods (__toString, __get, __set) menangani interaksi khusus pada objek.

class Pelanggan {
    private array $data = [];

    public function __construct(public string $nama) {}

    // Otomatis dipanggil saat objek diperlakukan sebagai string
    public function __toString(): string {
        return "Pelanggan: {$this->nama}";
    }

    // Dipanggil saat membaca properti yang tidak ada
    public function __get(string $name): mixed {
        return $this->data[$name] ?? "Properti '{$name}' belum diset";
    }

    // Dipanggil saat menulis properti yang tidak ada
    public function __set(string $name, mixed $value): void {
        $this->data[$name] = $value;
    }
}

$p = new Pelanggan("Nurul");
$p->email = "nurul@example.test";

echo $p . "\n";
echo "Email: " . $p->email . "\n";
