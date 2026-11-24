<?php
// Inheritance (pewarisan sifat) memungkinkan child class mewarisi properti dan method dari parent class menggunakan extends.

class Binatang {
    public function __construct(public string $nama) {}

    public function bernapas(): string {
        return "{$this->nama} sedang bernapas.";
    }
}

class Burung extends Binatang {
    public function terbang(): string {
        return "{$this->nama} terbang di angkasa.";
    }
}

$b = new Burung("Elang");
echo $b->bernapas() . "\n";
echo $b->terbang() . "\n";
