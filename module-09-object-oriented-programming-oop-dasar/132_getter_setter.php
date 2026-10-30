<?php
// Getter dan Setter menyediakan gerbang validasi sebelum membaca atau menulis properti private.

class Siswa {
    private int $nilai = 0;

    public function setNilai(int $nilai): void {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai {$nilai} di luar batas yang valid (0-100)!\n";
        }
    }

    public function getNilai(): int {
        return $this->nilai;
    }
}

$s = new Siswa();
$s->setNilai(88);
echo "Nilai Siswa: " . $s->getNilai() . "\n";
$s->setNilai(150); // Validasi menolak
