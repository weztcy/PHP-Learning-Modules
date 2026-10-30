<?php
// Standar SPL Iterator memungkinkan perulangan objek khusus menggunakan perulangan foreach.

class KoleksiBuku implements IteratorAggregate {
    private array $buku = [];

    public function tambah(string $judul): void {
        $this->buku[] = $judul;
    }

    public function getIterator(): Traversable {
        return new ArrayIterator($this->buku);
    }
}

$koleksi = new KoleksiBuku();
$koleksi->tambah("Clean Code");
$koleksi->tambah("Refactoring");

echo "=== Iterasi Koleksi Buku ===\n";
foreach ($koleksi as $item) {
    echo "- {$item}\n";
}
