<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GreenLe - Go Green</title>
    @vite('resources/css/app.css')

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        green: {
                            main: '#2DBE2D',
                            dark: '#17231F',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-gray-900">

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
                <a href="#" class="hover:text-green-400 transition">Home</a>
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


    <!-- heroo -->
    <section class="relative min-h-130 flex items-center justify-center bg-green-800 bg-center">
        <div class="text-center text-white px-5 pt-10 max-w-4xl mb-20">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                <span class="text-green-500">Go Green</span>
                <br>
                Save The Planet
            </h1>

            <p class="max-w-xl mx-auto mt-5 text-[10px] md:text-xs text-gray-200 leading-relaxed">
                Li Europan lingues es membres del sam familie.Lor separat existentie es un myth.Por scientie, musica, sport, etc tot Europa usa li sam vocabular.
            </p>

            <div class="flex justify-center gap-3 mt-7">

                <a href="#about"
                   class="bg-green-500 hover:bg-green-600 px-5 py-3 rounded-lg text-xs font-medium transition">
                    Join Community
                </a>

                <a href="#services"
                   class="border border-white/70 hover:bg-white hover:text-gray-900 px-5 py-3 rounded-lg text-xs font-medium transition">
                    Learn More...
                </a>

            </div>
        </div>


       
    </section>





    <!-- control -->
    <section id="services"
             class="bg-gray-50 py-16 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
            Green Control for
            <span class="text-green-500">Earth</span>
        </h2>

        <p class="text-sm text-gray-500 max-w-xl mx-auto mt-4">
            Together we can create a cleaner, greener,
            and healthier planet for future generations.
        </p>

        <div class="mt-8">
            <a href="#contact"
               class="inline-block bg-green-500 hover:bg-green-600 text-white px-7 py-3 rounded-lg text-sm transition">
                Start With Us
            </a>
        </div>

    </section>


  <!-- footer -->
    <footer id="contact" class="bg-[#101713] text-white">

        <div class="max-w-6xl mx-auto px-6 py-14">

            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

                <!-- Brand -->
                <div>

                    <h2 class="text-2xl font-bold">
                        🌱 Green<span class="text-green-500">Le</span>
                    </h2>

                    <p class="text-gray-400 text-xs leading-relaxed mt-4">
                        Creating a greener future through
                        sustainable actions and environmental
                        awareness.
                    </p>

                </div>


                <!-- Navigation -->
                <div>

                    <h3 class="font-semibold mb-4">
                        Navigation
                    </h3>

                    <ul class="space-y-3 text-xs text-gray-400">
                        <li>
                            <a href="#" class="hover:text-green-500">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="#about" class="hover:text-green-500">
                                About
                            </a>
                        </li>

                        <li>
                            <a href="#services" class="hover:text-green-500">
                                Services
                            </a>
                        </li>

                        <li>
                            <a href="#" class="hover:text-green-500">
                                Blog
                            </a>
                        </li>
                    </ul>

                </div>


                <!-- services -->
                <div>

                    <h3 class="font-semibold mb-4">
                        Services
                    </h3>

                    <ul class="space-y-3 text-xs text-gray-400">
                        <li>Plastic Waste Management</li>
                        <li>Greening the Earth</li>
                        <li>Waste Recycling</li>
                        <li>Environmental Education</li>
                    </ul>

                </div>


                <!-- contact -->
                <div>

                    <h3 class="font-semibold mb-4">
                        Contact Us
                    </h3>

                    <ul class="space-y-3 text-xs text-gray-400">
                        <li> Indonesia</li>
                        <li> hello@greenle.com</li>
                        <li> +62 812 3456 7890</li>
                    </ul>

                    <div class="flex gap-3 mt-5">

                        <a href="#"
                           class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500">
                            f
                        </a>

                        <a href="#"
                           class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500">
                            ig
                        </a>

                        <a href="#"
                           class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-green-500">
                            in
                        </a>

                    </div>

                </div>

            </div>


            <!-- Copyright -->
            <div class="border-t border-white/10 mt-10 pt-6 flex flex-col md:flex-row justify-between gap-3  text-[10px] text-gray-500">

                <p>
                    © 2026 GreenLe. All Rights Reserved.
                </p>

                <div class="flex gap-5">
                    <a href="#" class="hover:text-green-500">
                        Privacy Policy
                    </a>

                    <a href="#" class="hover:text-green-500">
                        Terms & Conditions
                    </a>
                </div>

            </div>

        </div>

    </footer>

</body>
</html>