<?php
include 'koneksi.php';
if (isset($_GET['kodeMK'])) {
    $db = new Database();
    $con = $db->con;
    
    $kodeMK = $_GET['kodeMK'];
    $stmt = $con->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $kodeMK);
    $stmt->execute();
}
header("location:view_matakuliah.php");
?>