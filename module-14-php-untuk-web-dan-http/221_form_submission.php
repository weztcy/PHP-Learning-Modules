<?php
// Menangani alur pemrosesan formulir dari submit hingga tanggapan feedback.

$nama = "";
$statusKirim = "";

// Simulasi submit data via POST
if (!empty($_POST) || php_sapi_name() === 'cli') {
    $nama = $_POST['namaPengguna'] ?? "Farhan Pratama";
    $statusKirim = "Terima kasih, {$nama}. Formulir berhasil diterima!";
}

echo "=== Pemrosesan Formulir ===\n";
echo "Status: {$statusKirim}\n";
?>
<form method="POST">
    <label>Nama:</label>
    <input type="text" name="namaPengguna" value="<?php echo htmlspecialchars($nama); ?>">
    <button type="submit">Kirim Data</button>
</form>
