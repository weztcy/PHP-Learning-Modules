<?php
// Menampilkan data koleksi secara dinamis menggunakan perulangan di dalam template HTML.

$daftarMateri = [
    ["kode" => "M01", "nama" => "Pengenalan PHP Dasar"],
    ["kode" => "M02", "nama" => "Pengelolaan Form dan HTTP"],
    ["kode" => "M03", "nama" => "Koneksi Database PDO"]
];
?>
<h3>Daftar Silabus Pembelajaran:</h3>
<ul>
    <?php foreach ($daftarMateri as $materi): ?>
        <li><strong><?php echo $materi['kode']; ?></strong>: <?php echo $materi['nama']; ?></li>
    <?php endforeach; ?>
</ul>
