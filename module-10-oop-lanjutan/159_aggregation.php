<?php
// Aggregation adalah hubungan 'has-a' yang longgar di mana objek bagian dapat eksis secara independen dari objek utama.

class Dosen {
    public function __construct(public string $nama) {}
}

class Jurusan {
    private array $daftarDosen = [];

    public function tambahDosen(Dosen $dosen): void {
        $this->daftarDosen[] = $dosen;
    }

    public function tampilkanDosen(): void {
        foreach ($this->daftarDosen as $d) {
            echo "Dosen Jurusan: {$d->nama}\n";
        }
    }
}

$d1 = new Dosen("Prof. Suhartono");
$jurusan = new Jurusan();
$jurusan->tambahDosen($d1);
$jurusan->tampilkanDosen();
