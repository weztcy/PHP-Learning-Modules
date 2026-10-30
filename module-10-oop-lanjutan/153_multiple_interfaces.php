<?php
// PHP mendukung implementasi lebih dari satu interface sekaligus pada satu class.

interface DapatDibersihkan {
    public function bersihkan(): void;
}

interface DapatDiulang {
    public function reset(): void;
}

class CacheMemory implements DapatDibersihkan, DapatDiulang {
    public function bersihkan(): void {
        echo "Cache dibersihkan dari memori.\n";
    }

    public function reset(): void {
        echo "Cache direset ke pengaturan default.\n";
    }
}

$cache = new CacheMemory();
$cache->bersihkan();
$cache->reset();
