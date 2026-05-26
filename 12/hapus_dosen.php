<?php
include 'koneksi.php';
if (isset($_GET['idDosen'])) {
    $db = new Database();
    $con = $db->con;
    
    $idDosen = $_GET['idDosen'];
    $stmt = $con->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $idDosen);
    $stmt->execute();
}
header("location:view_dosen.php");
?>