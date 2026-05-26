<?php
include 'koneksi.php';
if (isset($_POST['input'])) {
    $db = new Database();
    $con = $db->con;

    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $stmt = $con->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    if (!$stmt->execute()) { 
        die("Query Gagal: " . $con->error); 
    }
    header("location:view_mahasiswa.php");
}
?>