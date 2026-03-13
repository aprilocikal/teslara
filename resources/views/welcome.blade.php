<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BROWNIEBakes | The Art of Premium Cookies</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- GSAP for High-End Interaction -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <style>
        :root { --c-brown: #4a3728; --c-gold: #8d704b; --c-cream: #fcfaf8; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--c-cream); }
        h1, h2, h3, .font-serif { font-family: 'Playfair Display', serif; }
        
        /* Scroll Progress Bar */
        #scroll-progress { position: fixed; top: 0; left: 0; height: 3px; background: var(--c-gold); z-index: 1000; width: 0%; transition: width 0.1s; }
        
        .glass-premium { background: rgba(255, 255, 255, 0.4); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .vibrant-gradient { background: linear-gradient(135deg, var(--c-brown) 0%, var(--c-gold) 100%); }
        
        .outline-text { -webkit-text-stroke: 1px rgba(255,255,255,0.2); color: transparent; }

        /* Smooth Image Masking to prevent boxes */
        #experience img { mask-image: radial-gradient(circle, black 40%, transparent 75%); -webkit-mask-image: radial-gradient(circle, black 40%, transparent 75%); }

        .hover-lift { transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
        .hover-lift:hover { transform: translateY(-12px) scale(1.02); }

        /* Modern Scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: var(--c-cream); }
        ::-webkit-scrollbar-thumb { background: var(--c-gold); border-radius: 10px; }

        [x-cloak] { display: none !important; }
    </style>
</head>
<body x-data="{ cartCount: 0, showCart: false, atTop: true, searchOpen: false, mobileMenuOpen: false, activeFilter: 'All' }" 
      @scroll.window="atTop = (window.pageYOffset <= 50); updateScrollProgress()"
      class="text-stone-800 antialiased overflow-x-hidden">

    <!-- Scroll Progress Bar -->
    <div id="scroll-progress"></div>

    <!-- Floating WhatsApp Assistance Hub (Modern UMKM Staple) -->
    <div class="fixed bottom-8 left-8 z-[60] group">
        <div class="absolute bottom-full left-0 mb-4 scale-0 group-hover:scale-100 transition-transform origin-bottom-left">
            <div class="bg-white p-4 rounded-2xl shadow-2xl border border-stone-100 w-48 text-center italic text-[10px] text-stone-400">
                "Halo! Perlu bantuan memilih rasa yang pas?"
            </div>
        </div>
        <a href="https://wa.me/62123456789?text=saya%20ingin%20melakukan%20pemesanan" target="_blank" class="w-14 h-14 bg-emerald-500 text-white rounded-full flex items-center justify-center shadow-3xl hover:bg-emerald-600 transition-all duration-300 hover:rotate-12">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.417-.003 6.557-5.338 11.892-11.893 11.892-1.997-.001-3.951-.5-5.688-1.448l-6.305 1.652zm6.599-3.835c1.558.925 3.31 1.414 5.099 1.415h.005c5.38 0 9.754-4.374 9.757-9.754.002-2.607-1.011-5.059-2.859-6.908-1.847-1.848-4.3-2.86-6.903-2.862-5.38 0-9.754 4.374-9.756 9.754-.001 1.761.468 3.479 1.357 4.996l-1.03 3.764 3.861-1.011zm12.514-6.417c-.318-.159-1.88-.928-2.172-1.034-.292-.106-.504-.159-.716.159-.212.318-.821 1.034-1.006 1.246-.185.212-.371.238-.689.079-.318-.159-1.342-.494-2.556-1.577-.945-.843-1.583-1.884-1.769-2.201-.185-.318-.02-.49.139-.648.143-.142.318-.371.477-.556.159-.185.212-.318.318-.529.106-.212.053-.397-.026-.556-.079-.159-.716-1.72-1-.212-.277-.674-.551-.716-.716s-.338-.019-.481-.019c-.143 0-.376.053-.572.265-.196.212-.746.729-.746 1.776s.762 2.059.868 2.201c.106.143 1.5 2.291 3.635 3.212.508.219.904.351 1.213.449.51.162.973.139 1.34.084.409-.06 1.88-.768 2.145-1.473.265-.706.265-1.313.185-1.438-.079-.125-.292-.201-.61-.359z"/></svg>
        </a>
    </div>

    <!-- Header (Fixed Container for Banner + Nav) -->
    <header class="fixed top-0 w-full z-50 transition-all duration-700">
        <!-- Promo Banner -->
        <div class="bg-stone-900 text-white py-3 text-center text-[7px] md:text-[9px] font-black uppercase tracking-[0.2em] md:tracking-[0.4em] relative flex items-center justify-center gap-2 px-4 whitespace-nowrap overflow-hidden">
            Free Premium Packaging for Orders Over Rp 150k
            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 text-amber-400 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>

        <!-- Navigation -->
        <nav :class="atTop ? 'bg-transparent py-4 md:py-8' : 'glass-premium shadow-xl py-2 md:py-3 border-b border-stone-200/50'" 
             class="w-full transition-all duration-700 px-4 md:px-12">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <a href="#" class="text-lg md:text-xl font-black tracking-tighter" :class="atTop ? 'text-stone-950' : 'text-stone-900'">
                    BROWNIE<span class="font-serif italic text-amber-700 font-normal">Bakes</span>
                </a>
                
                <div class="hidden lg:flex gap-14 text-[9px] font-black tracking-[0.4em] uppercase text-stone-400">
                    <a href="#home" class="hover:text-stone-900 transition relative group">Home<span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-stone-900 group-hover:w-full transition-all duration-500"></span></a>
                    <a href="#products" class="hover:text-stone-900 transition relative group">Collections<span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-stone-900 group-hover:w-full transition-all duration-500"></span></a>
                    <a href="#about" class="hover:text-stone-900 transition relative group">Our Story<span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-stone-900 group-hover:w-full transition-all duration-500"></span></a>
                    <a href="#testimonials" class="hover:text-stone-900 transition relative group">Reviews<span class="absolute -bottom-2 left-0 w-0 h-[2px] bg-stone-900 group-hover:w-full transition-all duration-500"></span></a>
                </div>

                <div class="flex items-center gap-4 md:gap-6">
                    <!-- Shopping Cart Summary -->
                    <button @click="showCart = true" class="relative group">
                        <svg class="w-6 h-6 text-stone-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span x-show="cartCount > 0" class="absolute -top-1 -right-1 w-4 h-4 bg-amber-600 text-white text-[8px] font-bold flex items-center justify-center rounded-full" x-text="cartCount"></span>
                    </button>
                    
                    <a href="https://wa.me/62123456789?text=saya%20ingin%20melakukan%20pemesanan" target="_blank" class="hidden md:block bg-stone-950 text-white px-10 py-4 rounded-full text-[10px] font-black hover:bg-stone-800 transition shadow-2xl tracking-[0.2em] uppercase">Order via WA</a>

                    <!-- Hamburger Menu Button -->
                    <button @click="mobileMenuOpen = true" class="lg:hidden p-2 text-stone-900">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8h16M4 16h16"/></svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Menu Overlay (Compact Card Style - Floating at Top) -->
    <div x-show="mobileMenuOpen" x-cloak 
         class="fixed inset-0 z-[100] flex items-start justify-center p-6 pt-24"
         x-transition:enter="transition ease-out duration-500"
         x-transition:enter-start="opacity-0 -translate-y-10 scale-95 backdrop-blur-0"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100 backdrop-blur-xl"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100 backdrop-blur-xl"
         x-transition:leave-end="opacity-0 -translate-y-10 scale-95 backdrop-blur-0">
        
        <!-- Blurred Background Backer -->
        <div class="absolute inset-0 bg-stone-950/20 backdrop-blur-md" @click="mobileMenuOpen = false"></div>
        
        <!-- Menu Card (Floating at Top) -->
        <div class="relative w-full max-w-[340px] bg-stone-900/90 backdrop-blur-2xl rounded-[2.5rem] p-8 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)] border border-white/10 overflow-hidden">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-amber-600 rounded-xl flex items-center justify-center text-white shadow-lg shadow-amber-900/40">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <span class="text-white font-black text-base tracking-tighter uppercase">Brownie<span class="text-amber-500 font-serif italic font-normal lowercase ml-0.5">Bakes</span></span>
                </div>
                <button @click="mobileMenuOpen = false" class="w-8 h-8 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/80 hover:bg-white/10 transition group">
                    <span class="text-xl font-light group-hover:rotate-90 transition-transform duration-300">&times;</span>
                </button>
            </div>

            <!-- Content -->
            <div class="space-y-8">
                <div>
                    <span class="text-[7px] font-black uppercase tracking-[0.5em] text-amber-500/50 mb-6 block">Navigasi</span>
                    <nav class="flex flex-col gap-5">
                        <a href="#home" @click="mobileMenuOpen = false" class="group flex items-center justify-between text-white text-[10px] font-black uppercase tracking-[0.4em] hover:text-amber-500 transition duration-300">
                            Home
                            <div class="h-[1px] w-0 bg-amber-500 group-hover:w-8 transition-all duration-500"></div>
                        </a>
                        <a href="#products" @click="mobileMenuOpen = false" class="group flex items-center justify-between text-white text-[10px] font-black uppercase tracking-[0.4em] hover:text-amber-500 transition duration-300">
                            Collections
                            <div class="h-[1px] w-0 bg-amber-500 group-hover:w-8 transition-all duration-500"></div>
                        </a>
                        <a href="#about" @click="mobileMenuOpen = false" class="group flex items-center justify-between text-white text-[10px] font-black uppercase tracking-[0.4em] hover:text-amber-500 transition duration-300">
                            Our Story
                            <div class="h-[1px] w-0 bg-amber-500 group-hover:w-8 transition-all duration-500"></div>
                        </a>
                        <a href="#testimonials" @click="mobileMenuOpen = false" class="group flex items-center justify-between text-white text-[10px] font-black uppercase tracking-[0.4em] hover:text-amber-500 transition duration-300">
                            Reviews
                            <div class="h-[1px] w-0 bg-amber-500 group-hover:w-8 transition-all duration-500"></div>
                        </a>
                    </nav>
                </div>
                
                <div class="pt-4 border-t border-white/5">
                    <a href="https://wa.me/62123456789?text=saya%20ingin%20melakukan%20pemesanan" target="_blank" class="block w-full bg-amber-600 text-white text-center py-4 rounded-2xl font-black text-[9px] tracking-[0.2em] uppercase shadow-2xl shadow-amber-950/40 hover:bg-amber-500 active:scale-95 transition-all duration-300">
                        Order Via WA
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Fullscreen Search Overlay (Modern UX) -->
    <div x-show="searchOpen" x-cloak class="fixed inset-0 z-[100] glass-premium flex items-center justify-center p-12" x-transition:enter="animate__animated animate__fadeIn">
        <button @click="searchOpen = false" class="absolute top-12 right-12 text-5xl font-light hover:rotate-90 transition">&times;</button>
        <div class="w-full max-w-4xl">
            <input type="text" placeholder="Search our signature cookies..." class="w-full bg-transparent border-b-2 border-stone-200 py-6 text-4xl md:text-6xl font-serif italic outline-none focus:border-amber-700 transition">
            <div class="mt-8 flex gap-4 text-xs font-bold uppercase tracking-widest text-stone-400">
                <span>Popular:</span>
                <a href="#" class="text-stone-900">Belgian Chocolate</a>
                <a href="#" class="text-stone-900">Matcha Green Tea</a>
                <a href="#" class="text-stone-900">Red Velvet</a>
            </div>
        </div>
    </div>

    <!-- Hero Section: The Art of Taste -->
    <header id="home" class="relative min-h-[80vh] md:min-h-[90vh] flex items-center px-4 md:px-12 pt-40 md:pt-48 overflow-hidden">
        <!-- Artistic Abstract Orbs -->
        <div class="absolute top-0 right-0 w-[400px] md:w-[800px] h-[400px] md:h-[800px] bg-amber-100/30 rounded-full blur-[80px] md:blur-[120px] -z-10 animate-pulse"></div>
        <div class="absolute -bottom-20 md:-bottom-40 -left-20 md:-left-40 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-stone-200/40 rounded-full blur-[70px] md:blur-[100px] -z-10"></div>

        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-16 items-center">
            <div class="animate__animated animate__fadeInLeft text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-4 mb-4 md:mb-6 overflow-hidden">
                    <div class="h-[1px] w-8 md:w-12 bg-stone-300"></div>
                    <span class="text-[8px] md:text-[10px] font-black uppercase tracking-[0.3em] md:tracking-[0.5em] text-stone-400">Since 2018 &bull; Jakarta</span>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-stone-950 leading-[1] md:leading-[1.1] mb-6 tracking-tight">
                    Pure <br>
                    <span class="font-serif italic text-amber-800 font-normal">Indulgence.</span>
                </h1>
                <p class="text-stone-500 text-base md:text-lg font-light mb-8 md:mb-12 max-w-md mx-auto lg:mx-0 leading-relaxed border-l-0 lg:border-l-2 border-stone-100 pl-0 lg:pl-8">
                    Setiap gigitan adalah perayaan rasa. Kami hanya menggunakan bahan organik pilihan untuk menciptakan harmoni antara tekstur dan aroma.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6 md:gap-10">
                    <a href="#products" class="w-full sm:w-auto bg-stone-950 text-white px-8 md:px-10 py-4 md:py-5 rounded-full font-bold shadow-3xl hover:-translate-y-2 transition-all duration-500 active:scale-95 text-[9px] md:text-xs tracking-widest uppercase text-center">Explore Menu</a>
                    <div class="hidden sm:flex flex-col text-left">
                        <span class="text-lg md:text-xl font-serif italic text-stone-900">"Simply the best"</span>
                        <span class="text-[7px] md:text-[8px] font-black uppercase tracking-widest text-stone-400 mt-1">&mdash; Food & Living Magazine</span>
                    </div>
                </div>
            </div>

            <div class="relative animate__animated animate__fadeInUp animate__delay-1s px-4 md:px-0">
                <div class="relative z-10 w-full aspect-square rounded-[30px] md:rounded-[60px] overflow-hidden shadow-4xl hover-lift group">
                    <img src="/images/cookies1.png" class="w-full h-full object-cover group-hover:scale-105 transition duration-[3s]" alt="Main Product">
                    <div class="absolute inset-x-0 bottom-0 p-4 md:p-8 glass-premium border-none rounded-none flex items-center justify-between">
                        <div>
                            <p class="text-[7px] md:text-[8px] font-black uppercase tracking-[0.3em] text-white/60 mb-1">Signature Item</p>
                            <h4 class="text-lg md:text-2xl font-serif italic text-white tracking-wide">Double Choc Lava</h4>
                        </div>
                        <div class="text-right">
                            <span class="text-lg md:text-xl font-black text-amber-400">Rp 28k</span>
                        </div>
                    </div>
                </div>
                <!-- Interactive Badge (Smaller and Lower to avoid clash) -->
                <div class="absolute -top-4 -right-4 md:-top-10 md:-right-10 w-24 h-24 md:w-40 md:h-40 bg-white rounded-full shadow-2xl flex items-center justify-center p-3 md:p-5 border border-stone-100 animate-spin-slow">
                    <svg viewBox="0 0 100 100" class="w-full h-full">
                        <path id="circlePath" d="M 50, 50 m -40, 0 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0 " fill="transparent" />
                        <text class="text-[8px] md:text-[10px] font-black uppercase tracking-[0.2em] text-stone-900">
                            <textPath xlink:href="#circlePath">Freshly Baked Every Single Morning &bull; </textPath>
                        </text>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-4 h-4 md:w-8 md:h-8 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                </div>
            </div>
            
            <!-- Modern Taste Profile Badge -->
            <div class="mt-10 flex flex-wrap gap-4 overflow-hidden py-2">
                @foreach(['Dark Roast', 'Creamy', 'Nutty', 'Gluten Free'] as $tag)
                <div class="flex items-center gap-2 group cursor-pointer">
                    <div class="w-1.5 h-1.5 rounded-full bg-amber-700/30 group-hover:bg-amber-700 transition"></div>
                    <span class="text-[9px] font-black uppercase tracking-widest text-stone-400 group-hover:text-stone-900 transition">{{ $tag }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </header>

    <!-- Fast Stats (Minimalist) -->
    <section id="stats-section" class="py-16 border-y border-stone-100 bg-white px-6 relative z-10">
        <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            @foreach([['15k+', 'Happy Souls'], ['100%', 'Organic'], ['24h', 'Express Delivery'], ['4.9', 'Average Rating']] as $stat)
            <div class="space-y-4">
                <h5 class="text-4xl md:text-5xl font-black text-stone-950 tracking-tighter">{{ $stat[0] }}</h5>
                <p class="text-[10px] font-black uppercase tracking-[0.3em] text-stone-400">{{ $stat[1] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- The Experience: Scroll-Driven Deconstruction (Inspired by TikTok) -->
    <section id="experience" class="relative bg-[#fcfaf8] py-0 overflow-hidden border-y border-stone-100 transition-colors duration-1000">
        <!-- Ambient Glow (Soft and Airy) -->
        <div class="absolute inset-0 bg-radial-gradient from-amber-100/20 to-transparent opacity-50 pointer-events-none"></div>

        <div class="sticky-container h-[120vh] w-full relative">
            <div class="sticky top-0 h-screen w-full flex items-center justify-center overflow-hidden">
                <!-- Background Big Text -->
                <h2 id="exp-text-bg" class="absolute text-[20vw] font-black text-stone-200/40 whitespace-nowrap select-none">CRAFTED WITH PRECISION</h2>
                
                <!-- Center Cookie Sequence (Stacked) -->
                <div class="relative z-20 w-[60vw] md:w-[35vw] aspect-square flex items-center justify-center">
                    <img id="cookie-1" src="/images/cookie_clean_1.png" class="absolute w-[120%] h-[120%] object-contain mix-blend-multiply drop-shadow-[0_15px_35px_rgba(74,55,40,0.12)]" alt="Cookie 1">
                    <img id="cookie-2" src="/images/cookie_clean_2.png" class="absolute w-[120%] h-[120%] object-contain mix-blend-multiply opacity-0 scale-90" alt="Cookie 2">
                    <img id="cookie-3" src="/images/cookie_clean_1.png" class="absolute w-[120%] h-[120%] object-contain mix-blend-multiply opacity-0 scale-90" alt="Cookie 3">
                </div>

                <!-- Flying Ingredients (Minimalist SVG Icons) -->
                <div id="ing-1" class="absolute z-30 top-[15%] left-[20%] opacity-0 scale-50 blur-sm group">
                    <div class="glass-premium p-6 rounded-full border border-white/20">
                        <svg class="w-12 h-12 text-amber-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 15.5V11m-4 4.5V11m-4 4.5V11m-4 4.5V11M3 11V3.5h18V11m-18 0l3 5.5h12l3-5.5M5.5 16.5V21h13v-4.5"></path></svg>
                        <span class="absolute -bottom-10 left-1/2 -translate-x-1/2 text-[8px] font-black uppercase tracking-[0.4em] text-white/40 whitespace-nowrap">Pure Cocoa</span>
                    </div>
                </div>
                
                <div id="ing-2" class="absolute z-10 bottom-[20%] right-[25%] opacity-0 scale-50 blur-sm">
                    <div class="glass-premium p-8 rounded-full border border-white/10">
                        <svg class="w-10 h-10 text-amber-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707"></path></svg>
                    </div>
                </div>

                <div id="ing-3" class="absolute z-40 top-1/2 left-[10%] opacity-0 rotate-[-15deg]">
                    <h4 class="text-6xl md:text-8xl font-serif italic text-white/5 whitespace-nowrap outline-text">AUTHENTIC</h4>
                </div>

                <!-- Scrolling Labels -->
                <div id="label-1" class="absolute left-10 md:left-32 top-1/2 -translate-y-1/2 max-w-xs opacity-0">
                    <span class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em] mb-4 block">Stage 01</span>
                    <h3 class="text-stone-900 text-4xl md:text-5xl font-serif italic leading-tight">Melt-in-your-mouth <br> texture.</h3>
                </div>
                
                <div id="label-2" class="absolute right-10 md:right-32 top-1/2 -translate-y-1/2 max-w-xs text-right opacity-0">
                    <span class="text-amber-600 text-[10px] font-black uppercase tracking-[0.4em] mb-4 block">Stage 02</span>
                    <h3 class="text-stone-900 text-4xl md:text-5xl font-serif italic leading-tight">Sourced from <br> private farms.</h3>
                </div>

                <!-- Center Message (Final) -->
                <div id="exp-final" class="absolute inset-0 flex flex-col items-center justify-center text-center px-6 opacity-0 scale-95 z-50 pointer-events-none">
                    <h2 class="text-stone-950 text-5xl md:text-7xl font-black mb-6 tracking-tighter uppercase leading-none">It's not just <br> a cookie.</h2>
                    <p class="text-stone-500 text-lg font-light mb-10">It's a masterpiece in every grain of sugar.</p>
                    <a href="#products" class="bg-amber-600 text-white px-10 py-4 rounded-full font-black text-[10px] tracking-widest uppercase hover:bg-amber-700 transition shadow-4xl pointer-events-auto">Order Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Collection Showcase -->
    <section id="products" class="py-20 px-6 md:px-12 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-32 gap-12">
                <div class="max-w-xl animate-on-scroll">
                    <h2 class="text-5xl md:text-6xl font-black text-stone-950 leading-[0.9] mb-8 tracking-tighter">The <span class="font-serif italic text-amber-800 font-normal">Edit.</span></h2>
                    <p class="text-stone-400 text-base font-light leading-relaxed">Kami tidak hanya menjual kue, kami menjual kemewahan yang bisa dinikmati siapa saja. Pilih koleksi favorit Anda.</p>
                </div>
                <!-- Modern Category Pills -->
                <div class="flex flex-wrap gap-4">
                    @foreach(['All', 'Classic', 'Premium', 'Signature'] as $filter)
                    <button @click="activeFilter = '{{$filter}}'" 
                            :class="activeFilter === '{{$filter}}' ? 'bg-stone-950 text-white shadow-2xl scale-110' : 'bg-stone-50 text-stone-400 hover:bg-stone-100'"
                            class="px-10 py-4 rounded-full text-[9px] font-black uppercase tracking-widest transition-all duration-700">
                        {{$filter}}
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- Enhanced Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                @foreach($products as $product)
                <div x-show="activeFilter === 'All' || activeFilter === '{{$product->category}}'" 
                     x-transition:enter="animate__animated animate__fadeInUp"
                     class="group flex flex-col hover-lift">
                    <div class="relative aspect-[4/5] rounded-[60px] overflow-hidden mb-10 bg-stone-100">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-[2s]">
                        <!-- Advanced Hover CTA -->
                        <div class="absolute inset-0 bg-stone-950/20 opacity-0 group-hover:opacity-100 transition-opacity duration-700 flex items-center justify-center p-12">
                            <button @click="cartCount++" class="bg-white text-stone-950 px-10 py-5 rounded-full font-black text-[10px] tracking-widest uppercase shadow-4xl hover:bg-amber-400 transition-colors">Add to Bag</button>
                        </div>
                        <!-- Tag -->
                        <div class="absolute top-10 left-10">
                            <span class="bg-white/90 backdrop-blur text-stone-950 px-6 py-2 rounded-2xl text-[9px] font-black uppercase tracking-widest">{{ $product->category }}</span>
                        </div>
                    </div>
                    <div class="px-4">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-3xl font-serif italic text-stone-950 tracking-tight">{{ $product->name }}</h3>
                            <span class="text-xl font-black text-amber-800 tracking-tighter">Rp{{ number_format($product->price/1000, 0) }}k</span>
                        </div>
                        <div class="flex gap-2 mb-4">
                            @if($product->category == 'Signature')
                                <span class="text-[8px] font-black uppercase tracking-[0.2em] bg-amber-50 text-amber-800 px-3 py-1 rounded-full border border-amber-100">Chef's Choice</span>
                            @endif
                            <span class="text-[8px] font-black uppercase tracking-[0.2em] text-stone-400">Available Fresh</span>
                        </div>
                        <p class="text-stone-400 text-sm font-light leading-relaxed">{{ $product->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Visual Moments Gallery (Lifestyle Feature) -->
    <section class="py-24 bg-white px-6 md:px-12">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 relative aspect-[21/9] rounded-[60px] overflow-hidden group">
                <img src="/images/lifestyle1.png" class="w-full h-full object-cover group-hover:scale-105 transition duration-[3s]" alt="Cafe Moment">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
                <div class="absolute bottom-12 left-12">
                    <span class="text-amber-400 text-[10px] font-black uppercase tracking-[0.4em] mb-4 block">Cafe Moment</span>
                    <h3 class="text-4xl font-serif italic text-white">"A perfect match for <br> your morning coffee."</h3>
                </div>
            </div>
            <div class="relative rounded-[60px] overflow-hidden group bg-stone-900 flex flex-col items-center justify-center p-12 text-center">
                <div class="w-20 h-20 bg-amber-700/20 rounded-full flex items-center justify-center mb-8 border border-amber-700/30">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h4 class="text-white text-2xl font-serif italic mb-6">Nikmati di Kafe <br> atau di Rumah.</h4>
                <p class="text-white/40 text-xs font-light leading-relaxed">Kami bekerja sama dengan berbagai kafe lokal untuk menghadirkan rasa otentik kami lebih dekat dengan Anda.</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section (Redesigned & More Compact) -->
    <section id="about" class="py-16 md:py-24 bg-stone-50 px-4 md:px-12 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-stone-100/50 -z-10"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center">
            <div class="relative order-2 lg:order-1 px-4 md:px-0">
                <div class="relative z-10 w-full aspect-[4/5] rounded-[40px] md:rounded-[80px] overflow-hidden shadow-4xl animate-float max-w-sm mx-auto lg:max-w-none">
                    <img src="/images/packaging.png" class="w-full h-full object-cover" alt="Our Packaging">
                </div>
                <!-- Taste is Memory Badge (Scaled) -->
                <div class="absolute -bottom-6 -right-2 md:-bottom-16 md:-right-16 w-3/4 sm:w-2/3 aspect-square bg-amber-900 rounded-[30px] md:rounded-[60px] p-6 md:p-12 flex flex-col justify-end text-white shadow-4xl">
                    <span class="text-2xl md:text-5xl font-serif italic mb-2 md:mb-6">"Taste is memory."</span>
                    <p class="text-[8px] md:text-xs font-black uppercase tracking-widest opacity-60">Handmade with precision</p>
                </div>
            </div>
            <div class="order-1 lg:order-2 text-center lg:text-left">
                <span class="text-[8px] md:text-[10px] font-black uppercase tracking-[0.4em] md:tracking-[0.6em] text-amber-700 mb-6 md:mb-8 block">The Heritage</span>
                <h2 class="text-4xl md:text-6xl font-bold text-stone-950 leading-[1] md:leading-[0.9] mb-8 md:mb-10 tracking-tighter">Born from a <br> <span class="font-serif italic text-amber-800 font-normal">Legacy of Flavor.</span></h2>
                <div class="space-y-8 md:space-y-12 mb-10 md:mb-16">
                    <p class="text-stone-500 text-base md:text-lg leading-relaxed font-light px-4 lg:px-0">Kami percaya bahwa makanan bukan sekadar pengisi perut, melainkan medium emosi. Sejak 2018, misi kami tetap sama: menciptakan kebahagiaan digital yang berujung pada gigitan yang tak terlupakan.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 text-left">
                        <div class="px-4 lg:px-0">
                            <h6 class="text-[10px] md:text-xs font-black uppercase tracking-widest text-stone-900 mb-2 md:mb-4">Ethically Sourced</h6>
                            <p class="text-[11px] md:text-xs text-stone-400 leading-relaxed font-light">Setiap biji cokelat dan gandum kami ambil langsung dari petani lokal terbaik.</p>
                        </div>
                        <div class="px-4 lg:px-0">
                            <h6 class="text-[10px] md:text-xs font-black uppercase tracking-widest text-stone-900 mb-2 md:mb-4">Master Bakeries</h6>
                            <p class="text-[11px] md:text-xs text-stone-400 leading-relaxed font-light">Diracik oleh tim ahli yang mendedikasikan hidupnya untuk seni kuliner.</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start gap-6 md:gap-8 border-t border-stone-200 pt-8 md:pt-12">
                    <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-stone-950 flex items-center justify-center text-white font-serif italic text-2xl md:text-3xl">A</div>
                    <div class="text-left">
                        <p class="text-base md:text-lg font-black text-stone-950 italic leading-none">Astra Brownie</p>
                        <p class="text-[8px] md:text-[9px] font-black uppercase tracking-widest text-stone-400 mt-1">Founder & Executive Pastry Chef</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials (Modern Lifestyle Grid) -->
    <section id="testimonials" class="py-24 bg-white px-6 md:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-32">
                <h2 class="text-5xl font-black text-stone-950 mb-8 tracking-tighter">The <span class="font-serif italic text-amber-800 font-normal">Review.</span></h2>
                <div class="h-1 w-20 bg-amber-200 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                @foreach([['Sangat premium!', 'Aurelia V.'], ['Matchanya juara!', 'Kevin H.'], ['Packagingnya mewah', 'Sasa L.']] as $i => $review)
                <div class="bg-stone-50 p-12 rounded-[50px] space-y-8 hover:bg-stone-950 group transition-colors duration-700">
                    <div class="flex gap-1">
                        @for($j=0; $j<5; $j++) <span class="text-amber-500">★</span> @endfor
                    </div>
                    <p class="text-xl font-serif italic text-stone-900 group-hover:text-white transition-colors">"{{ $review[0] }} Teksturnya soft tapi tetap crunchy di pinggir. Pas banget buat teman kopi."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden grayscale group-hover:grayscale-0 transition-all">
                            <img src="https://i.pravatar.cc/150?u={{$i+10}}" alt="">
                        </div>
                        <span class="text-[10px] font-black text-stone-400 uppercase tracking-widest group-hover:text-white/60">{{ $review[1] }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Newsletter: Join the Club -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto bg-stone-950 rounded-[60px] p-12 md:p-20 text-center relative overflow-hidden">
            <div class="absolute inset-0 bg-white/5 opacity-10" style="background-image: url('https://www.transparenttextures.com/patterns/cubes.png');"></div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-8 leading-tight">Dapatkan Update <br> <span class="font-serif italic text-white/60 font-normal">Koleksi Terbatas.</span></h2>
            <p class="text-white/40 mb-10 max-w-sm mx-auto font-light text-sm">Jadilah yang pertama mencicipi rasa terbaru kami setiap musimnya.</p>
            <form class="flex flex-col md:flex-row gap-4 max-w-md mx-auto p-1.5 bg-white/10 backdrop-blur rounded-full">
                <input type="email" placeholder="Your aesthetic email..." class="flex-1 bg-transparent px-6 py-3 text-white outline-none text-sm">
                <button type="submit" class="bg-white text-stone-950 px-8 py-3 rounded-full font-black text-[9px] tracking-widest uppercase hover:bg-amber-400 transition">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer Part -->
    <footer class="bg-white pt-20 pb-12 border-t border-stone-100 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-12">
            <div>
                <a href="#" class="text-2xl font-black tracking-tighter text-stone-950">
                    BROWNIE<span class="font-serif italic text-amber-700 font-normal">Bakes</span>
                </a>
            </div>
            <div class="flex gap-12 text-[9px] font-black uppercase tracking-[0.4em] text-stone-400">
                <a href="#" class="hover:text-stone-900 transition">Instagram</a>
                <a href="#" class="hover:text-stone-900 transition">TikTok</a>
                <a href="https://wa.me/62123456789?text=saya%20ingin%20melakukan%20pemesanan" class="hover:text-stone-900 transition">WhatsApp</a>
            </div>
            <div class="text-[9px] font-black uppercase tracking-[0.4em] text-stone-300">
                &copy; 2026 Astra Heritage Concept
            </div>
        </div>
    </footer>

    <!-- Cart Modal Overlay -->
    <div x-show="showCart" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center p-6 bg-stone-950/80 backdrop-blur-3xl">
        <div @click.away="showCart = false" class="bg-white rounded-[60px] w-full max-w-xl overflow-hidden shadow-4xl animate__animated animate__zoomIn">
            <div class="p-16 text-center">
                <div class="w-24 h-24 bg-stone-50 text-stone-900 rounded-[40px] flex items-center justify-center mx-auto mb-10">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </div>
                <h3 class="text-5xl font-serif italic mb-6">Your Bag</h3>
                <p class="text-stone-400 mb-12 font-light">Kami akan menyiapkan pesanan premium Anda sesegera mungkin.</p>
                <div class="bg-stone-50 rounded-[40px] p-10 mb-12 flex justify-between items-center px-16">
                    <span class="text-[10px] font-black text-stone-400 uppercase tracking-widest">Total Items</span>
                    <span class="text-4xl font-black text-stone-950 tracking-tighter" x-text="cartCount"></span>
                </div>
                <a href="https://wa.me/62123456789?text=saya%20ingin%20melakukan%20pemesanan" 
                   class="bg-stone-950 text-white w-full block py-6 rounded-full font-black tracking-widest uppercase hover:bg-amber-900 transition shadow-2xl text-xs">
                    Confirm via WhatsApp
                </a>
                <button @click="showCart = false" class="mt-8 text-stone-300 text-[9px] font-black uppercase tracking-widest hover:text-stone-950 transition">Keep Browsing</button>
            </div>
        </div>
    </div>

    <script>
        // GSAP Implementation for Scroll-Driven Experience
        gsap.registerPlugin(ScrollTrigger);

        // Entry Transition: Sophisticated Fade & Scale for the Stats Section (LIGHT VERSION)
        gsap.to("#stats-section", {
            scrollTrigger: {
                trigger: "#experience",
                start: "top bottom", 
                end: "top top",
                scrub: true
            },
            opacity: 0.3,
            scale: 0.8,
            ease: "none"
        });

        const expTl = gsap.timeline({
            scrollTrigger: {
                trigger: "#experience",
                start: "top top",
                end: "bottom center", // Release halfway through the section
                scrub: 0.5, // Even tighter control
                pin: true,
                anticipatePin: 1
            }
        });

        // Step 1: Subtle Parallax & Rotating Cookie Sequence
        expTl.fromTo("#exp-text-bg", { x: "10%", opacity: 0.1 }, { x: "-30%", opacity: 0.3, ease: "none" }, 0);
        
        // Cookie 1 Entrance
        expTl.fromTo("#cookie-1", 
            { scale: 0.9, rotate: -5, y: 50 }, 
            { scale: 1.1, rotate: 10, y: 0, duration: 1, ease: "power2.out" }, 
            0
        );
        
        // Step 2: Transition to Cookie 2
        expTl.to("#cookie-1", { opacity: 0, scale: 1.3, rotate: 20, duration: 0.8 }, 1.2);
        expTl.to("#cookie-2", { opacity: 1, scale: 1.1, rotate: 15, duration: 0.8 }, 1.3);
        
        // Ingredient 1 (Cocoa) & Label 1
        expTl.to("#label-1", { opacity: 1, x: 40, duration: 0.8 }, 0.3);
        expTl.to("#ing-1", { opacity: 1, scale: 1, y: -80, rotate: 45, blur: 0, duration: 1, ease: "back.out(2)" }, 0.3);
        
        // Step 3: Transition to Cookie 3
        expTl.to("#cookie-2", { opacity: 0, scale: 0.8, rotate: -20, duration: 0.8 }, 2.2);
        expTl.to("#cookie-3", { opacity: 1, scale: 1.2, rotate: 10, duration: 0.8 }, 2.3);

        expTl.to("#label-1", { opacity: 0, x: -40, duration: 0.6, ease: "power2.in" }, 1.2);
        expTl.to("#ing-1", { opacity: 0, scale: 0.5, y: -150, duration: 0.8 }, 1.2);

        expTl.to("#label-2", { opacity: 1, x: -40, duration: 0.8, ease: "power2.out" }, 1.8);
        expTl.to("#ing-2", { opacity: 1, scale: 2, y: 50, rotate: -45, blur: 0, duration: 1.2 }, 1.8);
        expTl.to("#ing-3", { opacity: 1, x: 100, duration: 1.5, ease: "none" }, 1.5);

        // Step 4: Cinematic Reveal (COOKIE STAYS VISIBLE IN LIGHT VERSION)
        expTl.to("#label-2", { opacity: 0, y: -20, duration: 0.4 }, 2.4);
        expTl.to("#cookie-3", { scale: 0.8, opacity: 0.15, filter: "blur(10px)", duration: 0.8, ease: "power2.out" }, 2.4);
        expTl.to("#ing-2, #ing-3", { opacity: 0, scale: 3, duration: 0.5 }, 2.4);
        expTl.to("#exp-text-bg", { opacity: 0, duration: 0.5 }, 2.4);
        
        expTl.to("#exp-final", { opacity: 1, scale: 1, duration: 0.8, ease: "back.out(1.2)" }, 2.6);

        // Scroll Progress Function
        function updateScrollProgress() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById("scroll-progress").style.width = scrolled + "%";
        }

        // Simple Scroll Reveal Simulation
        window.addEventListener('scroll', () => {
            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('animate__fadeInUp');
                }
            });
        });
    </script>
</body>
</html>
