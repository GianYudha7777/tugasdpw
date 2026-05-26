<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $idDosen = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_dosen SET namaDosen='$namaDosen', noHP='$noHP' WHERE idDosen='$idDosen'";
    $result = mysqli_query($link, $query);

    if (!$result) { die("Gagal update data: " . mysqli_error($link)); }
    header("location:view_dosen.php");
}
?>