<?php
// Parameter adalah variabel yang menerima nilai masukan (argumen) ke dalam fungsi.

function sapaPengguna(string $nama, string $waktu): void {
    // Menggunakan argumen yang diterima dalam teks sapaan
    echo "Selamat {$waktu}, {$nama}! Semoga harimu menyenangkan.\n";
}

sapaPengguna("Dian", "Pagi");
sapaPengguna("Bambang", "Sore");
