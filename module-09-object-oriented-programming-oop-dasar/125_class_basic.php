<?php
// Class adalah cetak biru (blueprint), sedangkan Object adalah instansiasi nyata dari cetak biru tersebut.

class Kendaraan {
    public string $nama = "Sepeda Motor";
}

$motor = new Kendaraan();
echo "Nama Kendaraan: " . $motor->nama . "\n";
