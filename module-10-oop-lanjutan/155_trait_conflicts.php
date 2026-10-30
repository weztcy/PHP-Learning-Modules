<?php
// Mengatasi konflik nama method yang sama dari dua trait menggunakan insteadof dan as (alias).

trait TraitA {
    public function sapa(): void {
        echo "Halo dari TraitA!\n";
    }
}

trait TraitB {
    public function sapa(): void {
        echo "Halo dari TraitB!\n";
    }
}

class Pengguna {
    use TraitA, TraitB {
        TraitA::sapa insteadof TraitB; // Gunakan method milik TraitA
        TraitB::sapa as sapaDariB;     // Buat alias untuk method milik TraitB
    }
}

$u = new Pengguna();
$u->sapa();
$u->sapaDariB();
