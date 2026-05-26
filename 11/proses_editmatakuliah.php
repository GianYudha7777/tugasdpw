<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "UPDATE t_matakuliah SET namaMK='$namaMK', sks='$sks', jam='$jam' WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link, $query);

    if (!$result) { die("Gagal update data: " . mysqli_error($link)); }
    header("location:view_matakuliah.php");
}
?>