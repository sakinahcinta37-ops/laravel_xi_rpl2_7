<html>
<head>
     @vite('resources/css/app.css')
</head>
<body>
     <!-- navbar -->
    <nav class="absolute top-0 left-0 w-full z-20 px-6 md:px-12 py-5">
        <div class="max-w-6xl mx-auto flex items-center justify-between">

            <!-- logo -->
            <a href="#" class="flex items-center gap-1 text-white text-xl font-bold">
                <span class="text-green-500 text-2xl">♣</span>
                Green
                <span class="text-green-500">Le</span>
            </a>

            <!-- menu -->
            <div class="hidden md:flex items-center gap-7 border border-white/40 rounded-full px-5 py-2 text-[11px] text-white backdrop-blur-sm">
                <a href="/go-green" class="hover:text-green-400 transition">Home</a>
                <a href="#about" class="hover:text-green-400 transition">About</a>
                <a href="#services" class="hover:text-green-400 transition">Services</a>
                <a href="#blog" class="hover:text-green-400 transition">Blog</a>
                <a href="/gogreen2" class="hover:text-green-400 transition">Contact</a>
                <a href="#" class="hover:text-green-400 transition">Community</a>
            </div>

            <!-- button -->
            <a href="#contact"
               class="border border-white/60 rounded-full px-5 py-2 text-xs text-white hover:bg-green-500 hover:border-green-500 transition">
                Get Started
            </a>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>