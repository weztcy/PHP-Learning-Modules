<?php
// Covariance memungkinkan child method mengembalikan tipe yang lebih spesifik daripada parent method.
// Contravariance memungkinkan child method menerima parameter yang lebih umum.

class Makanan {}
class MakananKucing extends Makanan {}

class IndukHewan {
    public function makan(MakananKucing $m): Makanan {
        return new Makanan();
    }
}

class AnakKucing extends IndukHewan {
    // Return type covariant (lebih spesifik)
    public function makan(Makanan $m): MakananKucing {
        return new MakananKucing();
    }
}

echo "Covariance & Contravariance memastikan konsistensi substitusi Liskov (LSP).\n";
$k = new AnakKucing();
echo "Instansiasi berhasil dievaluasi.\n";
