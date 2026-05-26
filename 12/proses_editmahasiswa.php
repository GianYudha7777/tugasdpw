<?php
if (isset($_POST['edit'])) {
    include "koneksi.php";
    $db = new Database();
    $con = $db->con;

    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $stmt = $con->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);

    if (!$stmt->execute()) { 
        die("Query gagal: " . $con->error); 
    }
    header("location:view_mahasiswa.php");
}
?>