<?php
include 'koneksi.php';
if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];
    $query = "DELETE FROM t_matakuliah WHERE kodeMK = '$kodeMK'";
    $result = mysqli_query($link, $query);
    if (!$result) { die("Gagal menghapus data: " . mysqli_error($link)); }
}
header("location:view_matakuliah.php");
?>