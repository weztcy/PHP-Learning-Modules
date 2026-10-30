<?php
// Tag pembuka PHP standar adalah '<?php'.
// Pada file yang hanya berisi kode PHP murni, tag penutup '? >' sebaiknya diabaikan
// untuk mencegah whitespace yang tidak disengaja terkirim ke output buffer.

$bahasa = "PHP";
echo "Tag standar PHP menggunakan: <?php ... ? > (tanpa spasi)\\n";
echo "Saat ini sedang mengeksekusi kode di lingkungan {$bahasa}.\\n";

// Menjelaskan konsep short echo tag <?= $var ? > yang sering digunakan pada template HTML
echo "Short echo tag <?= \\$var ? > setara dengan <?php echo \\$var; ? >\\n";

