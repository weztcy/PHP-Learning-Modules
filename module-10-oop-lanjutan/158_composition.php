<?php
// Composition adalah hubungan 'has-a' yang erat di mana objek bagian dibuat dan dikelola oleh objek utama.

class Mesin {
    public function nyalakan(): string {
        return "Mesin menderu aktif.";
    }
}

class Kapal {
    private Mesin $mesin;

    public function __construct() {
        // Objek Mesin dibuat di dalam Kapal (composition erat)
        $this->mesin = new Mesin();
    }

    public function berlayar(): void {
        echo $this->mesin->nyalakan() . " Kapal mulai berlayar di laut.\n";
    }
}

$kapal = new Kapal();
$kapal->berlayar();
