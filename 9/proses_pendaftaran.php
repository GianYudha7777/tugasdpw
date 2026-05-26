<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <h3>Data Pendaftaran Berhasil Diterima:</h3>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
        Selamat datang <b><?php echo htmlspecialchars($_POST["nama"]); ?></b><br>
        NIM : <?php echo htmlspecialchars($_POST["nim"]); ?><br>
        <!-- Tambahkan field lainnya di sini -->
    <?php else : ?>
        <p>Silahkan isi form pendaftaran terlebih dahulu.</p>
    <?php endif; ?>

</body>
</html>