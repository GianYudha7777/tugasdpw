<?php
include 'koneksi.php';
if (isset($_GET['idDosen'])) {
    $idDosen = $_GET['idDosen'];
    $query = "DELETE FROM t_dosen WHERE idDosen = '$idDosen'";
    $result = mysqli_query($link, $query);
    if (!$result) { die("Gagal menghapus data: " . mysqli_error($link)); }
}
header("location:view_dosen.php");
?>