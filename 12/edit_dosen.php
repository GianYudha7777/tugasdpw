<?php
include 'koneksi.php';
$db = new Database();
$con = $db->con;

$idDosen = $_GET['idDosen'];
$stmt = $con->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
$stmt->bind_param("i", $idDosen);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Edit Dosen - Modul 12 OOP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-100 p-8">
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-slate-900">Ubah Data Dosen</h2>
            <p class="text-sm text-slate-400 mt-1">Lakukan pembaruan data secara berkala.</p>
        </div>
        <form action="proses_editdosen.php" method="POST" class="space-y-5">
            <input type="hidden" name="idDosen" value="<?= $data['idDosen']; ?>">
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">ID Dosen (Kunci)</label>
                <input type="text" value="<?= $data['idDosen']; ?>" disabled class="w-full px-4 py-2.5 bg-slate-100 border border-slate-200 text-slate-400 rounded-xl font-semibold text-sm cursor-not-allowed">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nama Dosen</label>
                <input type="text" name="namaDosen" value="<?= htmlspecialchars($data['namaDosen']); ?>" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nomor HP</label>
                <input type="text" name="noHP" value="<?= htmlspecialchars($data['noHP']); ?>" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 transition-all font-medium">
            </div>
            <div class="flex items-center gap-3 pt-2">
                <a href="view_dosen.php" class="w-1/2 text-center py-2.5 border border-slate-200 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" name="edit" class="w-1/2 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-xl text-sm shadow-md transition-all">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</body>
</html>