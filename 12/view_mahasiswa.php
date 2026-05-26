<?php 
include 'koneksi.php'; 
$db = new Database();
$con = $db->con;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Data Mahasiswa - OOP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 p-6 sm:p-10">
    <div class="max-w-6xl mx-auto">
        <div class="mb-6"><a href="index.php" class="text-sm font-semibold text-slate-500 hover:text-indigo-600">← Kembali ke Dashboard</a></div>
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-slate-900">Data Mahasiswa</h1>
                <p class="text-sm text-slate-500 mt-1">Kelola data mahasiswa.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3">
                <form action="view_mahasiswa.php" method="GET" class="flex gap-2">
                    <input type="text" name="keyword" placeholder="Cari nama mahasiswa..." class="px-4 py-2 text-sm bg-white border border-slate-200 rounded-xl focus:border-indigo-500 shadow-sm outline-none" value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                    <button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded-xl text-sm font-semibold hover:bg-slate-800">Cari</button>
                </form>
                <a href="input_mahasiswa.php" class="inline-flex items-center justify-center px-4 py-2 bg-indigo-600 text-white rounded-xl text-sm font-semibold hover:bg-indigo-500 shadow-md">+ Tambah Mahasiswa</a>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50/70 border-b border-slate-100 text-slate-500 text-xs font-bold uppercase tracking-wider">
                        <th class="py-4 px-6">NPM</th>
                        <th class="py-4 px-6">Nama</th>
                        <th class="py-4 px-6">Prodi</th>
                        <th class="py-4 px-6">Alamat</th>
                        <th class="py-4 px-6">No HP</th>
                        <th class="py-4 px-6 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                    <?php
                    if (isset($_GET['keyword']) && $_GET['keyword'] != "") {
                        $keyword = "%" . $_GET['keyword'] . "%";
                        $stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC");
                        $stmt->bind_param("s", $keyword);
                        $stmt->execute();
                        $result = $stmt->get_result();
                    } else {
                        $result = $con->query("SELECT * FROM t_mahasiswa ORDER BY npm ASC");
                    }
                    
                    while ($data = $result->fetch_assoc()) { ?>
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-4 px-6 font-semibold text-slate-900"><?= $data['npm']; ?></td>
                            <td class="py-4 px-6 font-medium"><?= htmlspecialchars($data['namaMhs']); ?></td>
                            <td class="py-4 px-6"><span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-50 text-indigo-700"><?= htmlspecialchars($data['prodi']); ?></span></td>
                            <td class="py-4 px-6 text-slate-500"><?= htmlspecialchars($data['alamat']); ?></td>
                            <td class="py-4 px-6 text-slate-500"><?= htmlspecialchars($data['noHP']); ?></td>
                            <td class="py-4 px-6 text-center space-x-2">
                                <a href="edit_mahasiswa.php?npm=<?= $data['npm']; ?>" class="text-xs font-semibold text-indigo-600 bg-indigo-50 hover:bg-indigo-100 px-3 py-1.5 rounded-lg transition-all">Edit</a>
                                <a href="hapus_mahasiswa.php?npm=<?= $data['npm']; ?>" onclick="return confirm('Hapus mahasiswa ini?')" class="text-xs font-semibold text-rose-600 bg-rose-50 hover:bg-rose-100 px-3 py-1.5 rounded-lg transition-all">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>