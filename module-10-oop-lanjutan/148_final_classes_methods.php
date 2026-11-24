<?php
// Kata kunci final mencegah class untuk diwariskan (final class) atau mencegah method di-override (final method).

class KeamananDasar {
    final public function enkripsi(string $teks): string {
        return md5($teks);
    }
}

final class KunciRahasia extends KeamananDasar {
    // Class ini tidak dapat diwariskan lagi
}

$k = new KunciRahasia();
echo "Hash MD5: " . $k->enkripsi("rahasia123") . "\n";
echo "Class final melindungi arsitektur inti dari modifikasi yang tidak diinginkan.\n";
