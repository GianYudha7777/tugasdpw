<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Tambah Mata Kuliah - Modul 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-100 p-8">
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-slate-900">Input Mata Kuliah Baru</h2>
            <p class="text-sm text-slate-400 mt-1">Masukkan data kurikulum mata kuliah.</p>
        </div>
        <form action="proses_inputmatakuliah.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Kode MK</label>
                <input type="number" name="kodeMK" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Nama Mata Kuliah</label>
                <input type="text" name="namaMK" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Bobot SKS</label>
                <input type="number" name="sks" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Jumlah Jam</label>
                <input type="number" name="jam" required class="w-full px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:border-indigo-500 outline-none transition-all font-medium">
            </div>
            <div class="flex items-center gap-3 pt-2">
                <a href="view_matakuliah.php" class="w-1/2 text-center py-2.5 border border-slate-200 rounded-xl text-sm font-semibold text-slate-500 hover:bg-slate-50 transition-all">Batal</a>
                <button type="submit" name="input" class="w-1/2 py-2.5 bg-emerald-600 hover:bg-emerald-500 text-white font-semibold rounded-xl text-sm shadow-md transition-all">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>