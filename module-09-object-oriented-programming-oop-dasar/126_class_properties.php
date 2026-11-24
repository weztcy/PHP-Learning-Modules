<?php
// Properties adalah variabel yang melekat pada suatu class.

class Komputer {
    public string $prosesor = "Intel Core i7";
    public int $ramGb = 16;
}

$pc = new Komputer();
echo "Spesifikasi PC: {$pc->prosesor}, RAM {$pc->ramGb} GB\n";
