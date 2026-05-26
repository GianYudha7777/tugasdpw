<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $db = new Database();
    $con = $db->con;

    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $stmt = $con->prepare("UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?");
    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);

    if (!$stmt->execute()) { 
        die("Gagal update data: " . $con->error); 
    }
    header("location:view_matakuliah.php");
}
?>