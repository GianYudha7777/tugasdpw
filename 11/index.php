<?php
include("koneksi.php");
// Hitung statistik menggunakan fungsi prosedural Modul 11
$countDosen = mysqli_fetch_assoc(mysqli_query($link, "SELECT COUNT(*) as total FROM t_dosen"))['total'];
$countMhs   = mysqli_fetch_assoc(mysqli_query($link, "SELECT COUNT(*) as total FROM t_mahasiswa"))['total'];
$countMK    = mysqli_fetch_assoc(mysqli_query($link, "SELECT COUNT(*) as total FROM t_matakuliah"))['total'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE SEKOLAH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col">
    <nav class="bg-slate-900 text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-indigo-500 rounded-lg flex items-center justify-center font-bold text-white shadow-lg">A</div>
                    <span class="font-bold text-lg tracking-wider text-slate-100">DATABASE SEKOLAH</span>
                </div>
                <div class="flex space-x-2">
                    <a href="index.php" class="bg-slate-800 text-white px-3 py-2 rounded-lg text-sm font-medium">Dashboard</a>
                    <a href="view_dosen.php" class="text-slate-300 hover:bg-slate-800 hover:text-white px-3 py-2 rounded-lg text-sm font-medium transition-all">Dosen</a>
                    <a href="view_mahasiswa.php" class="text-slate-300 hover:bg-slate-800 hover:text-white px-3 py-2 rounded-lg text-sm font-medium transition-all">Mahasiswa</a>
                    <a href="view_matakuliah.php" class="text-slate-300 hover:bg-slate-800 hover:text-white px-3 py-2 rounded-lg text-sm font-medium transition-all">Mata Kuliah</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full">
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Selamat Datang Kembali 👋</h1>
            <p class="text-slate-500 mt-1">Dashboard Database Sekolah.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="view_dosen.php" class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:scale-[1.02] hover:border-indigo-100 transition-all duration-300 flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-400 uppercase tracking-wider">Total Data Dosen</p>
                    <h3 class="text-4xl font-bold text-slate-800 mt-2 group-hover:text-indigo-600 transition-colors"><?= $countDosen; ?></h3>
                </div>
                <div class="w-14 h-14 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-500 group-hover:bg-indigo-500 group-hover:text-white transition-all duration-300">D</div>
            </a>
            <a href="view_mahasiswa.php" class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:scale-[1.02] hover:border-emerald-100 transition-all duration-300 flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-400 uppercase tracking-wider">Total Mahasiswa</p>
                    <h3 class="text-4xl font-bold text-slate-800 mt-2 group-hover:text-emerald-600 transition-colors"><?= $countMhs; ?></h3>
                </div>
                <div class="w-14 h-14 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-500 group-hover:bg-emerald-500 group-hover:text-white transition-all duration-300">M</div>
            </a>
            <a href="view_matakuliah.php" class="group bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:scale-[1.02] hover:border-rose-100 transition-all duration-300 flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-400 uppercase tracking-wider">Total Mata Kuliah</p>
                    <h3 class="text-4xl font-bold text-slate-800 mt-2 group-hover:text-rose-600 transition-colors"><?= $countMK; ?></h3>
                </div>
                <div class="w-14 h-14 bg-rose-50 rounded-xl flex items-center justify-center text-rose-500 group-hover:bg-rose-500 group-hover:text-white transition-all duration-300">K</div>
            </a>
        </div>
    </main>
    <footer class="bg-white border-t border-slate-200 py-4 text-center text-sm text-slate-400 mt-auto">&copy; 2026 DATABASE SEKOLAH</footer>
</body>
</html>