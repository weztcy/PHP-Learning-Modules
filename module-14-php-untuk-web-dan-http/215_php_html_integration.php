<?php
// Integrasi kode PHP ke dalam markup HTML untuk menghasilkan halaman dinamis.

$judulHalaman = "Portal Belajar PHP Web";
$tahun = date("Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $judulHalaman; ?></title>
</head>
<body>
    <h1>Selamat Datang di <?php echo $judulHalaman; ?></h1>
    <p>Halaman ini dirender menggunakan integrasi PHP dan HTML.</p>
    <footer>Hak Cipta &copy; <?php echo $tahun; ?></footer>
</body>
</html>
