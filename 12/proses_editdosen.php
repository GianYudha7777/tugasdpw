<?php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $db = new Database();
    $con = $db->con;

    $idDosen = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $stmt = $con->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $idDosen);
    
    if (!$stmt->execute()) { 
        die("Gagal update data: " . $con->error); 
    }
    header("location:view_dosen.php");
}
?>