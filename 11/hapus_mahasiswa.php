<?php
include "koneksi.php";
if (isset($_GET["npm"])) {
    $npm = $_GET["npm"];
    $query = "DELETE FROM t_mahasiswa WHERE npm = '$npm'";
    $result = mysqli_query($link, $query);
    if (!$result) { die("Gagal hapus data: " . mysqli_error($link)); }
}
header("location:view_mahasiswa.php");
?>