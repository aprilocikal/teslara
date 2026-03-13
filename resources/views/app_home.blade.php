<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Astra Space | Experiences</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Outfit', sans-serif; 
            background: radial-gradient(circle at top right, #1e1b4b, #030712);
            min-height: 100vh;
        }
        .glass { 
            background: rgba(255, 255, 255, 0.03); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .vibrant-gradient {
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 50%, #ec4899 100%);
        }
        .text-gradient {
            background: linear-gradient(to right, #818cf8, #c084fc, #fb7185);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .card-glow:hover {
            box-shadow: 0 0 30px rgba(99, 102, 241, 0.15);
            border-color: rgba(99, 102, 241, 0.3);
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    </style>
</head>
<body class="text-slate-200 antialiased overflow-x-hidden">

    <!-- Decorative Elements -->
    <div class="fixed top-0 right-0 w-[500px] h-[500px] bg-indigo-600/10 blur-[120px] -z-10 rounded-full"></div>
    <div class="fixed bottom-0 left-0 w-[500px] h-[500px] bg-pink-600/10 blur-[120px] -z-10 rounded-full"></div>

    <!-- Navigation / Header -->
    <nav class="sticky top-0 z-50 glass border-b border-white/5 px-6 py-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 vibrant-gradient rounded-lg rotate-12"></div>
                <span class="text-xl font-extrabold tracking-tighter text-white">ASTRA<span class="text-indigo-400">SPACE</span></span>
            </div>
            
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-400">
                <a href="#" class="text-white">Feed</a>
                <a href="#" class="hover:text-white transition">Discover</a>
                <a href="#" class="hover:text-white transition">Community</a>
            </div>

            <div class="flex items-center gap-4">
                <div class="text-right hidden sm:block">
                    <p class="text-xs font-bold text-white leading-none">Astra Jingga</p>
                    <p class="text-[10px] text-slate-500 uppercase tracking-widest mt-1">Explorer Level 1</p>
                </div>
                <div class="w-10 h-10 rounded-xl vibrant-gradient p-[2px]">
                    <div class="w-full h-full bg-slate-950 rounded-[10px] flex items-center justify-center font-bold text-white">
                        AJ
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Side Controls (Desktop) -->
            <div class="hidden lg:block lg:col-span-3 space-y-6">
                <div class="glass rounded-3xl p-6">
                    <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="flex items-center gap-3 p-3 bg-white/5 rounded-2xl text-white font-semibold">
                            <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span> Home Feed
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 p-3 hover:bg-white/5 rounded-2xl transition group text-slate-400 hover:text-white">
                            <span class="w-1.5 h-1.5 rounded-full bg-transparent group-hover:bg-slate-500 transition"></span> Trending
                        </a></li>
                        <li><a href="#" class="flex items-center gap-3 p-3 hover:bg-white/5 rounded-2xl transition group text-slate-400 hover:text-white">
                            <span class="w-1.5 h-1.5 rounded-full bg-transparent group-hover:bg-slate-500 transition"></span> Saved
                        </a></li>
                    </ul>
                </div>

                <div class="glass rounded-3xl p-6 overflow-hidden relative group">
                    <div class="relative z-10">
                        <h4 class="text-sm font-bold text-white mb-2 italic">MongoDB Connected</h4>
                        <p class="text-xs text-slate-400">Real-time sync active across all instances.</p>
                    </div>
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 vibrant-gradient blur-2xl opacity-20 group-hover:opacity-40 transition"></div>
                </div>
            </div>

            <!-- Content Center -->
            <div class="lg:col-span-6 space-y-12">
                
                <!-- Beautiful Input Area -->
                <div class="relative">
                    <div class="absolute -inset-1 vibrant-gradient blur opacity-10 rounded-[32px]"></div>
                    <div class="relative glass rounded-[32px] p-8">
                        <h2 class="text-2xl font-extrabold text-white mb-6">What's on your <span class="text-gradient font-black">mind?</span></h2>
                        <form action="{{ route('post.store') }}" method="POST" class="space-y-4">
                            @csrf
                            <input type="text" name="title" placeholder="A catchy title..." 
                                class="w-full bg-white/5 border border-white/5 rounded-2xl p-4 focus:ring-2 focus:ring-indigo-500 outline-none placeholder:text-slate-600 text-white transition">
                            <textarea name="content" placeholder="Share your experience with the world..." 
                                class="w-full bg-white/5 border border-white/5 rounded-2xl p-4 h-32 focus:ring-2 focus:ring-indigo-500 outline-none placeholder:text-slate-600 text-white transition resize-none"></textarea>
                            <div class="flex justify-between items-center pt-2">
                                <div class="flex gap-2">
                                    <button type="button" class="w-10 h-10 glass rounded-xl flex items-center justify-center hover:bg-white/10 transition">📸</button>
                                    <button type="button" class="w-10 h-10 glass rounded-xl flex items-center justify-center hover:bg-white/10 transition">✨</button>
                                </div>
                                <button class="vibrant-gradient text-white font-bold px-8 py-3 rounded-2xl shadow-xl shadow-indigo-600/20 hover:scale-105 active:scale-95 transition-all">
                                    Broadcast ✨
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Feed Section -->
                <div class="space-y-8">
                    <div class="flex items-center justify-between px-2">
                        <h3 class="text-xl font-bold text-white flex items-center gap-3">
                            Latest <span class="text-gradient">Experiences</span>
                        </h3>
                        <div class="flex gap-2">
                            <button class="text-xs font-bold text-indigo-400">Newest</button>
                            <span class="text-slate-700">•</span>
                            <button class="text-xs font-bold text-slate-500">Popular</button>
                        </div>
                    </div>

                    <div class="space-y-6">
                        @forelse($posts as $post)
                        <div class="glass rounded-[32px] p-8 card-glow transition-all group">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-slate-800 to-slate-900 border border-white/10 flex items-center justify-center font-black text-slate-400">
                                        {{ substr($post->author, 5) }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-white text-sm">{{ $post->author }}</p>
                                        <p class="text-[10px] text-slate-500 uppercase tracking-widest">{{ $post->created_at?->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <button class="text-slate-600 hover:text-white transition">•••</button>
                            </div>
                            
                            <h4 class="text-xl font-extrabold text-white mb-3 group-hover:text-indigo-400 transition">{{ $post->title }}</h4>
                            <p class="text-slate-400 leading-relaxed text-base mb-6">{{ $post->content }}</p>
                            
                            <div class="flex items-center gap-6 pt-6 border-t border-white/5">
                                <button class="flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-pink-500 transition">
                                    <span>❤️</span> 24
                                </button>
                                <button class="flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-indigo-500 transition">
                                    <span>💬</span> 8 Comments
                                </button>
                            </div>
                        </div>
                        @empty
                        <div class="glass rounded-[32px] p-20 text-center border-dashed border-white/5">
                            <div class="text-4xl mb-4">🌌</div>
                            <p class="text-slate-500 italic font-medium">Space is empty. Be the first to light it up.</p>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Right Column / Trends (Desktop) -->
            <div class="hidden lg:block lg:col-span-3 space-y-6">
                <div class="glass rounded-3xl p-6">
                    <h3 class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-4">Active Explorers</h3>
                    <div class="space-y-4">
                        @for($i=1; $i<=4; $i++)
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-white/5 border border-white/5 flex items-center justify-center text-[10px] font-bold">U{{$i}}</div>
                            <div class="flex-1">
                                <p class="text-xs font-bold text-white leading-none">Explorer {{$i}}</p>
                                <p class="text-[9px] text-emerald-500 mt-1 uppercase tracking-tighter">Online</p>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <div class="vibrant-gradient rounded-3xl p-8 text-white shadow-2xl shadow-indigo-600/20">
                    <h4 class="text-lg font-black mb-2 italic">PRO TIP 🚀</h4>
                    <p class="text-xs leading-relaxed opacity-90">Did you know? MongoDB allows you to store arrays and nested objects directly in these posts!</p>
                </div>
            </div>

        </div>
    </main>

    <!-- Mobile Nav -->
    <nav class="lg:hidden fixed bottom-0 left-0 right-0 glass border-t border-white/5 px-8 py-4 flex justify-between items-center z-50">
        <div class="text-indigo-400 flex flex-col items-center gap-1">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
            <span class="text-[10px] font-bold uppercase tracking-widest">Orbit</span>
        </div>
        <div class="text-slate-500 flex flex-col items-center gap-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <span class="text-[10px] font-bold uppercase tracking-widest">Search</span>
        </div>
        <div class="text-slate-500 flex flex-col items-center gap-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            <span class="text-[10px] font-bold uppercase tracking-widest">Me</span>
        </div>
    </nav>

    @if(session('success'))
    <div class="fixed top-24 right-6 z-[60] vibrant-gradient text-white px-6 py-4 rounded-2xl shadow-2xl animate-in slide-in-from-right duration-500">
        <div class="flex items-center gap-3">
            <span class="text-xl">✨</span>
            <p class="font-bold text-sm">{{ session('success') }}</p>
        </div>
    </div>
    @endif

</body>

</html>
