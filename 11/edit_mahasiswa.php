<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$query = "SELECT * FROM t_mahasiswa WHERE npm = '$npm'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Edit Mahasiswa - Modul 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-100 p-8">
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-slate-900">Ubah Data Mahasiswa</h2>
            <p class="text-sm text-slate-400 mt-1">Perbarui form data di bawah.</p>
        </div>
        <form action="proses_editmahasiswa.php" method="POST" class="space-y-4">
            <input type="hidden" name="npm" value="<?= $data['npm']; ?>">
            <div>
                <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">NPM</label>
                <input type="text" value="<?= $data['npm']; ?>" disabled class="w-full px-4 py-2.5 bg-slate-100 border border-slate-200 text-slate-400 rounded-xl font-semibold text-sm cursor-not-allowed">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Nama Lengkap</label>
                <input type="text" name="namaMhs" value="<?= htmlspecialchars($data['namaMhs']); ?>" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Program Studi</label>
                <input type="text" name="prodi" value="<?= htmlspecialchars($data['prodi']); ?>" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Alamat</label>
                <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']); ?>" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Nomor HP</label>
                <input type="text" name="noHP" value="<?= htmlspecialchars($data['noHP']); ?>" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div class="flex items-center gap-3 pt-2">
                <a href="view_mahasiswa.php" class="w-1/2 text-center py-2.5 border border-slate-200 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" name="edit" class="w-1/2 py-2.5 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-xl text-sm shadow-md transition-all">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>