<?php
// Late Static Binding (kata kunci static::) mereferensikan class yang dipanggil saat runtime, bukan class tempat method didefinisikan (self::).

class ModelInduk {
    protected static string $tabel = "induk";

    public static function getTabel(): string {
        return static::$tabel; // Menggunakan static:: untuk resolusi runtime
    }
}

class ModelPengguna extends ModelInduk {
    protected static string $tabel = "users";
}

echo "Tabel Induk: " . ModelInduk::getTabel() . "\n";
echo "Tabel Child: " . ModelPengguna::getTabel() . "\n";
