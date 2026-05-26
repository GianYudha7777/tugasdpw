<?php
include 'koneksi.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    // 1. Cari tahu ID terbesar dulu di database
    $query_max  = "SELECT MAX(idDosen) as max_id FROM t_dosen";
    $result_max = mysqli_query($link, $query_max);
    $data_max   = mysqli_fetch_assoc($result_max);
    
    // Jika data masih kosong, mulai dari 1. Jika ada, tambah 1
    $idDosen_baru = ($data_max['max_id'] != null) ? ($data_max['max_id'] + 1) : 1;

    // 2. KUNCI PERBAIKAN: Urutan kolom (idDosen, namaDosen, noHP) 
    // HARUS SAMA PERSIS dengan urutan nilai ($idDosen_baru, '$namaDosen', '$noHP')
    $query  = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES ('$idDosen_baru', '$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    // Cek jika eksekusi gagal
    if (!$result) { 
        die("Gagal menambah data ke database: " . mysqli_error($link)); 
    }

    // Jika sukses, munculkan alert dan balik ke tabel dosen
    echo "<script>
            alert('Data dosen baru berhasil ditambahkan!');
            window.location.href='view_dosen.php';
          </script>";
} else {
    header("location:view_dosen.php");
}
?>