<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontak</title>
    @vite('resources/css/app.css')
</head>
<body class="">
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
            </div>

            <!-- button -->
            <a href="#contact"
               class="border border-white/60 rounded-full px-5 py-2 text-xs text-white hover:bg-green-500 hover:border-green-500 transition">
                Get Started
            </a>
        </div>
    </nav>
    <!-- CONTACT -->
<section id="contact" class="py-16 bg-green-800">

    <div class="max-w-4xl mx-auto px-6">

        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-white">
                Contact <span class="text-green-500">Us</span>
            </h2>

            <p class="text-sm text-gray-500 mt-2">
                Hubungi kami untuk informasi lebih lanjut.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Informasi -->
            <div>
                <h3 class="text-white text-xl font-bold mb-5">
                    Get In Touch
                </h3>

                <p class="text-white text-sm mb-5">
                    Mari bersama menjaga bumi agar tetap hijau dan bersih.
                </p>

                <p class="text-white text-sm mb-3">
                    📧 hello@greenle.com
                </p>

                <p class="text-white text-sm mb-3">
                    📞 +62 812 3456 7890
                </p>

                <p class="text-white text-sm">
                    📍 Indonesia
                </p>
            </div>

            <!-- Form -->
            <form class="space-y-4">

                <input
                    type="text"
                    placeholder="Nama"
                    class="w-full p-3 border rounded-lg outline-none
                           focus:border-green-500"
                >

                <input
                    type="email"
                    placeholder="Email"
                    class="w-full p-3 border rounded-lg outline-none
                           focus:border-green-500"
                >

                <textarea
                    rows="4"
                    placeholder="Pesan"
                    class="w-full p-3 border rounded-lg outline-none
                           focus:border-green-500"></textarea>

                <button
                    type="submit"
                    class="bg-green-500 hover:bg-green-600
                           text-white px-6 py-3 rounded-lg
                           text-sm">
                    Kirim Pesan
                </button>

            </form>

        </div>

    </div>

</section>


<!-- FOOTER -->
<footer class="bg-[#10251c] text-white py-6">

    <div class="max-w-6xl mx-auto px-6 text-center">

        <h3 class="font-bold text-lg">
            Green<span class="text-green-500">Le</span>
        </h3>

        <p class="text-gray-400 text-xs mt-2">
            Together for a greener future.
        </p>

        <p class="text-gray-500 text-xs mt-4">
            © 2026 GreenLe. All Rights Reserved.
        </p>

    </div>

</footer>
</body>
</html>