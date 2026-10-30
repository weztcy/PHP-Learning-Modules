<?php
// Intersection types (PHP 8.1+) mewajibkan nilai memenuhi SELURUH interface atau tipe yang digabungkan (TipeA&TipeB).

class LaporanBulanan implements Countable, IteratorAggregate {
    private array $items = ["Januari", "Februari", "Maret"];

    public function count(): int {
        return count($this->items);
    }

    public function getIterator(): Traversable {
        return new ArrayIterator($this->items);
    }
}

// Fungsi mewajibkan parameter bertipe Countable SEKALIGUS IteratorAggregate
function prosesLaporan(Countable&IteratorAggregate $laporan): void {
    echo "Jumlah data: " . count($laporan) . " bulan.\n";
    foreach ($laporan as $bulan) {
        echo "  - {$bulan}\n";
    }
}

$lap = new LaporanBulanan();
prosesLaporan($lap);
