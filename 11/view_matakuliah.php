<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Data Mata Kuliah - Modul 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 p-6 sm:p-10">
    <div class="max-w-6xl mx-auto">
        <div class="mb-6"><a href="index.php" class="text-sm font-semibold text-slate-500 hover:text-indigo-600">← Kembali ke Dashboard</a></div>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Data Mata Kuliah</h1>
                <p class="text-sm text-slate-500 mt-1">Kelola kurikulum mata kuliah.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <form action="view_matakuliah.php" method="GET" class="flex gap-2">
                    <input type="text" name="keyword" placeholder="Cari nama mata kuliah..." class="px-4 py-2 text-sm bg-white border border-slate-200 rounded-xl focus:border-indigo-500 shadow-sm outline-none" value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                    <button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded-xl text-sm font-semibold hover:bg-slate-800">Cari</button>
                </form>
                <a href="input_matakuliah.php" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white rounded-xl text-sm font-semibold hover:bg-indigo-500 shadow-md">+ Tambah Matkul</a>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/70 border-b border-slate-100 text-slate-500 text-xs font-bold uppercase tracking-wider">
                        <th class="py-4 px-6">Kode MK</th>
                        <th class="py-4 px-6">Nama Mata Kuliah</th>
                        <th class="py-4 px-6">SKS</th>
                        <th class="py-4 px-6">Jam</th>
                        <th class="py-4 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                    <?php
                    if (isset($_GET['keyword']) && $_GET['keyword'] != "") {
                        $keyword = $_GET['keyword'];
                        $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
                    } else {
                        $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
                    }
                    $result = mysqli_query($link, $query);
                    while ($data = mysqli_fetch_assoc($result)) { ?>
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-slate-900"><?= $data['kodeMK']; ?></td>
                            <td class="py-4 px-6 font-medium"><?= $data['namaMK']; ?></td>
                            <td class="py-4 px-6"><span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-50 text-amber-700"><?= $data['sks']; ?> SKS</span></td>
                            <td class="py-4 px-6 text-slate-500"><?= $data['jam']; ?> Jam</td>
                            <td class="py-4 px-6 text-center space-x-2">
                                <a href="edit_matakuliah.php?kodeMK=<?= $data['kodeMK']; ?>" class="text-xs font-semibold text-indigo-600 bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-lg transition-all">Edit</a>
                                <a href="hapus_matakuliah.php?kodeMK=<?= $data['kodeMK']; ?>" onclick="return confirm('Hapus data matakuliah?')" class="text-xs font-semibold text-rose-600 bg-rose-50 hover:bg-rose-100 px-3 py-1.5 rounded-lg transition-all">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>