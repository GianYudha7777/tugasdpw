<?php
include 'koneksi.php';
if (isset($_POST['input'])) {
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    $result = mysqli_query($link, $query);

    if (!$result) { die("Query Gagal: " . mysqli_error($link)); }
    header("location:view_mahasiswa.php");
}
?>