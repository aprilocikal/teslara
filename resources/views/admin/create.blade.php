<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cookie | Admin Panel</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-['Plus_Jakarta_Sans'] text-slate-800 flex items-center justify-center min-h-screen">

    <div class="bg-white p-12 rounded-[40px] shadow-2xl shadow-indigo-100 border border-slate-100 w-full max-w-xl">
        <div class="mb-10 text-center">
            <h2 class="text-3xl font-bold">Add New Cookie</h2>
            <p class="text-slate-400 mt-2">Introduce a new flavor to the world.</p>
        </div>

        <form action="{{ route('admin.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Cookie Name</label>
                <input type="text" name="name" required class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 outline-none transition">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Price (Rp)</label>
                    <input type="number" name="price" required class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 outline-none transition">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Category</label>
                    <select name="category" class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 outline-none transition">
                        <option value="Classic">Classic</option>
                        <option value="Premium">Premium</option>
                        <option value="Signature">Signature</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Image URL</label>
                <input type="text" name="image_url" placeholder="/images/cookies1.png" class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 outline-none transition">
                <p class="text-[10px] text-slate-400 mt-2 italic ml-1">Use /images/cookies1.png for existing demo images.</p>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Flavor Description</label>
                <textarea name="description" required rows="4" class="w-full bg-slate-50 border border-slate-100 rounded-2xl p-4 focus:ring-2 focus:ring-amber-500 outline-none transition resize-none"></textarea>
            </div>

            <div class="flex gap-4 pt-4">
                <a href="{{ route('admin.dashboard') }}" class="flex-1 text-center py-4 rounded-2xl font-bold text-slate-400 hover:text-slate-600 transition">Cancel</a>
                <button type="submit" class="flex-[2] bg-amber-600 text-white py-4 rounded-2xl font-bold shadow-xl shadow-amber-100 hover:bg-amber-700 hover:-translate-y-1 transition-all">Create Product</button>
            </div>
        </form>
    </div>

</body>
</html>
