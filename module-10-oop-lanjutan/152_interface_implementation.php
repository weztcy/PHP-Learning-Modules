<?php
// Implementasi interface menggunakan kata kunci implements.

interface KendaraanListrik {
    public function isiDaya(): void;
    public function sisaBaterai(): int;
}

class MobilListrik implements KendaraanListrik {
    private int $baterai = 80;

    public function isiDaya(): void {
        $this->baterai = 100;
        echo "Baterai mobil telah diisi penuh 100%.\n";
    }

    public function sisaBaterai(): int {
        return $this->baterai;
    }
}

$ev = new MobilListrik();
echo "Baterai awal: " . $ev->sisaBaterai() . "%\n";
$ev->isiDaya();
echo "Baterai akhir: " . $ev->sisaBaterai() . "%\n";
