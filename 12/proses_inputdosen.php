<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
    $db = new Database();
    $con = $db->con;

    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $result_max = $con->query("SELECT MAX(idDosen) as max_id FROM t_dosen");
    $data_max   = $result_max->fetch_assoc();
    $idDosen_baru = ($data_max['max_id'] != null) ? ($data_max['max_id'] + 1) : 1;

    $stmt = $con->prepare("INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $idDosen_baru, $namaDosen, $noHP);

    if (!$stmt->execute()) { 
        die("Gagal menambah data ke database: " . $con->error); 
    }

    echo "<script>
            alert('Data dosen baru berhasil ditambahkan!');
            window.location.href='view_dosen.php';
          </script>";
} else {
    header("location:view_dosen.php");
}
?>