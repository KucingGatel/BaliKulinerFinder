<x-layouts.user>
    <x-slot:title>Home</x-slot:title>
    <div class="container mx-auto max-w-6xl px-4 py-8">
        <section id="beranda" class="animate-on-scroll">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di Bali Kuliner Finder!</h2>
                <p class="text-xl text-gray-600 mb-6">Temukan ribuan pilihan kuliner halal dan non-halal terbaik di
                    seluruh Bali. Dari warung tradisional
                    hingga restoran modern, semua ada di satu platform!</p>
                <p class="text-2xl font-semibold text-indigo-600">Mulai Pencarian Kuliner Anda Sekarang</p>
            </div>
            <form action="/search" method="get" class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg p-8">
                <fieldset class="space-y-6">
                    <legend class="text-2xl font-bold text-gray-700 mb-6">Cari Kuliner Favorit Anda</legend>
                    <div class="space-y-2">
                        <label for="search" class="block text-gray-700 font-medium">Nama Makanan atau
                            Restoran:</label>
                        <input type="text" id="search" name="search"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                            placeholder="Contoh: Nasi Ayam, Bebek Betutu, Sate Lilit">
                    </div>
                    <div class="space-y-2">
                        <label for="location" class="block text-gray-700 font-medium">Lokasi:</label>
                        <select id="location" name="location"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            <option value="">Pilih Kabupaten/Kota</option>
                            <option value="denpasar">Denpasar</option>
                            <option value="badung">Badung</option>
                            <option value="gianyar">Gianyar</option>
                            <option value="tabanan">Tabanan</option>
                            <option value="ubud">Ubud</option>
                            <option value="sanur">Sanur</option>
                            <option value="canggu">Canggu</option>
                            <option value="seminyak">Seminyak</option>
                            <option value="kuta">Kuta</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label for="halal" class="block text-gray-700 font-medium">Status Halal:</label>
                        <select id="halal" name="halal"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            <option value="semua">Semua</option>
                            <option value="halal">Halal Bersertifikat</option>
                            <option value="muslim-friendly">Muslim Friendly</option>
                            <option value="non-halal">Non-Halal</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 px-6 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition shadow-md">
                        🔍 Cari Sekarang
                    </button>
                </fieldset>
            </form>
        </section>

        <div class="border-t border-gray-200 my-16"></div>

        <!-- Tentang Section -->
        <section id="tentang" class="animate-on-scroll bg-white rounded-xl shadow-lg p-8 mb-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Tentang Bali Kuliner Finder</h2>
                <p class="text-gray-600 mb-10 text-lg leading-relaxed">
                    Bali Kuliner Finder adalah platform inovatif yang didedikasikan untuk membantu wisatawan dan
                    penduduk
                    lokal menemukan kuliner terbaik di Pulau Dewata. Kami memahami pentingnya menemukan makanan halal
                    bagi
                    wisatawan Muslim, sekaligus menyediakan informasi lengkap tentang berbagai pilihan kuliner lainnya.
                </p>
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg mb-8">
                    <h3 class="text-2xl font-semibold text-blue-700 mb-4">Visi Kami</h3>
                    <p class="text-gray-700">
                        Menjadi platform nomor satu dalam pencarian kuliner di Bali yang inklusif, informatif, dan
                        mendukung
                        pertumbuhan UMKM lokal.
                    </p>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-blue-700 mb-6">Misi Kami</h3>
                    <ol class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span
                                class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-blue-600 text-white rounded-full text-sm">1</span>
                            <span class="text-gray-700">Menyediakan informasi akurat tentang status halal kuliner di
                                Bali</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span
                                class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-blue-600 text-white rounded-full text-sm">2</span>
                            <span class="text-gray-700">Membantu UMKM kuliner untuk berkembang melalui platform
                                digital</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span
                                class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-blue-600 text-white rounded-full text-sm">3</span>
                            <span class="text-gray-700">Memudahkan wisatawan menemukan kuliner sesuai preferensi
                                mereka</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span
                                class="flex-shrink-0 w-6 h-6 flex items-center justify-center bg-blue-600 text-white rounded-full text-sm">4</span>
                            <span class="text-gray-700">Mempromosikan kekayaan kuliner Bali ke seluruh dunia</span>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <hr>

        <!-- Fitur Section -->
        <section id="fitur" class="py-16 animate-on-scroll">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Fitur Unggulan Kami</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Filter Halal -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="text-4xl mb-4">🕌</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Filter Halal</h3>
                    <p class="text-gray-600 mb-4">Pencarian berdasarkan status halal (Bersertifikat, Muslim Friendly,
                        Non-Halal)</p>
                    <div class="text-sm text-blue-600">Memudahkan wisatawan Muslim menemukan makanan sesuai kebutuhan
                    </div>
                </div>

                <!-- Peta Interaktif -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="text-4xl mb-4">📍</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Peta Interaktif</h3>
                    <p class="text-gray-600 mb-4">Tampilan lokasi kuliner dalam peta untuk navigasi mudah</p>
                    <div class="text-sm text-blue-600">Hemat waktu dengan navigasi langsung</div>
                </div>

                <!-- Review & Rating -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="text-4xl mb-4">⭐</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Review & Rating</h3>
                    <p class="text-gray-600 mb-4">Ulasan dari pengguna asli tentang kualitas dan pelayanan</p>
                    <div class="text-sm text-blue-600">Keputusan lebih tepat berdasarkan pengalaman orang lain</div>
                </div>

                <!-- Platform UMKM -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="text-4xl mb-4">🏪</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Platform UMKM</h3>
                    <p class="text-gray-600 mb-4">Wadah promosi gratis untuk UMKM kuliner lokal</p>
                    <div class="text-sm text-blue-600">Meningkatkan visibility dan omzet UMKM</div>
                </div>

                <!-- Kisaran Harga -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="text-4xl mb-4">💰</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Kisaran Harga</h3>
                    <p class="text-gray-600 mb-4">Informasi harga untuk memudahkan perencanaan budget</p>
                    <div class="text-sm text-blue-600">Makan sesuai budget tanpa khawatir</div>
                </div>

                <!-- Galeri Foto -->
                <div class="bg-white rounded-xl shadow-lg p-6 transform hover:scale-105 transition duration-300">
                    <div class="text-4xl mb-4">📸</div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Galeri Foto</h3>
                    <p class="text-gray-600 mb-4">Foto makanan dan suasana dari pengguna</p>
                    <div class="text-sm text-blue-600">Preview sebelum berkunjung</div>
                </div>
            </div>
        </section>

        <hr>

        <!-- Statistik Platform -->
        <section id="statistik" class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50 animate-on-scroll">
            <div class="container mx-auto max-w-6xl px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Statistik Platform</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Total UMKM -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-4xl font-bold text-blue-600 mb-2">
                            <span class="stat-number" data-target="500">0</span>+
                        </div>
                        <p class="text-gray-600 text-sm">Total UMKM Terdaftar</p>
                        <div class="text-green-500 text-sm mt-2">+15% per bulan</div>
                    </div>

                    <!-- Restoran Halal -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-4xl font-bold text-blue-600 mb-2">
                            <span class="stat-number" data-target="200">0</span>+
                        </div>
                        <p class="text-gray-600 text-sm">Restoran Bersertifikat Halal</p>
                        <div class="text-green-500 text-sm mt-2">+10% per bulan</div>
                    </div>

                    <!-- Pengguna Aktif -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-4xl font-bold text-blue-600 mb-2">
                            <span class="stat-number" data-target="10000">0</span>+
                        </div>
                        <p class="text-gray-600 text-sm">Pengguna Aktif</p>
                        <div class="text-green-500 text-sm mt-2">+25% per bulan</div>
                    </div>

                    <!-- Review -->
                    <div
                        class="bg-white rounded-xl shadow-lg p-6 text-center transform hover:scale-105 transition duration-300">
                        <div class="text-4xl font-bold text-blue-600 mb-2">
                            <span class="stat-number" data-target="25000">0</span>+
                        </div>
                        <p class="text-gray-600 text-sm">Review Terkumpul</p>
                        <div class="text-green-500 text-sm mt-2">+20% per bulan</div>
                    </div>
                </div>
            </div>
        </section>

        <hr>

        <!-- Artikel Kuliner -->
        <section id="artikel" class="py-16 animate-on-scroll">
            <div class="container mx-auto max-w-6xl px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Artikel Kuliner Terbaru</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Artikel 1 -->
                    <article
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="p-6">
                            <div class="text-sm text-blue-600 mb-2">8 Oktober 2025</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Mengenal Kuliner Halal Khas Bali</h3>
                            <p class="text-gray-600 mb-4">Bali tidak hanya terkenal dengan kuliner tradisionalnya yang
                                non-halal. Banyak hidangan khas Bali yang telah dimodifikasi menjadi versi halal tanpa
                                menghilangkan cita rasa aslinya.</p>
                            <ul class="text-gray-600 mb-4 space-y-2">
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Ayam Betutu</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Sate Lilit Ikan</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Nasi Campur Bali Halal</span>
                                </li>
                            </ul>
                            <a href="#baca-selengkapnya"
                                class="inline-block text-blue-600 hover:text-blue-800 transition">Baca selengkapnya
                                →</a>
                        </div>
                    </article>

                    <!-- Artikel 2 -->
                    <article
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="p-6">
                            <div class="text-sm text-blue-600 mb-2">5 Oktober 2025</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Tips Memulai Bisnis Kuliner di Bali</h3>
                            <p class="text-gray-600 mb-4">Panduan lengkap untuk memulai usaha kuliner di Bali,
                                termasuk:</p>
                            <ul class="text-gray-600 mb-4 space-y-2">
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Perizinan dan sertifikasi</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Pemilihan lokasi strategis</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Marketing digital</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Manajemen operasional</span>
                                </li>
                            </ul>
                            <a href="#baca-selengkapnya"
                                class="inline-block text-blue-600 hover:text-blue-800 transition">Baca selengkapnya
                                →</a>
                        </div>
                    </article>

                    <!-- Artikel 3 -->
                    <article
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <div class="p-6">
                            <div class="text-sm text-blue-600 mb-2">1 Oktober 2025</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Jelajah Kuliner Halal di Ubud</h3>
                            <p class="text-gray-600 mb-4">Panduan lengkap menjelajahi kuliner halal di kawasan Ubud,
                                meliputi:</p>
                            <ul class="text-gray-600 mb-4 space-y-2">
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Restoran halal terbaik</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Kafe dan kedai kopi halal</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Warung lokal ramah Muslim</span>
                                </li>
                                <li class="flex items-center space-x-2">
                                    <span class="text-blue-500">•</span>
                                    <span>Kisaran harga dan rekomendasi menu</span>
                                </li>
                            </ul>
                            <a href="#baca-selengkapnya"
                                class="inline-block text-blue-600 hover:text-blue-800 transition">Baca selengkapnya
                                →</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="py-16 bg-white animate-on-scroll">
            <div class="container mx-auto max-w-4xl px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Pertanyaan Umum (FAQ)</h2>
                <div class="space-y-4">
                    <details class="bg-white rounded-lg shadow-md group">
                        <summary class="list-none px-6 py-4 cursor-pointer relative flex items-center justify-between">
                            <span class="font-medium text-gray-800">Bagaimana cara mendaftarkan UMKM di platform
                                ini?</span>
                            <span class="transform group-open:rotate-180 transition-transform duration-200">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="px-6 py-4 text-gray-600 border-t border-gray-100">
                            Anda dapat mendaftar melalui form pendaftaran UMKM di halaman utama atau menghubungi tim
                            kami
                            langsung.
                        </p>
                    </details>

                    <details class="bg-white rounded-lg shadow-md group">
                        <summary class="list-none px-6 py-4 cursor-pointer relative flex items-center justify-between">
                            <span class="font-medium text-gray-800">Apakah semua restoran halal sudah tersertifikasi
                                MUI?</span>
                            <span class="transform group-open:rotate-180 transition-transform duration-200">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="px-6 py-4 text-gray-600 border-t border-gray-100">
                            Tidak semua, kami membedakan antara "Halal Bersertifikat" dan "Muslim Friendly" untuk
                            memudahkan
                            pencarian.
                        </p>
                    </details>

                    <details class="bg-white rounded-lg shadow-md group">
                        <summary class="list-none px-6 py-4 cursor-pointer relative flex items-center justify-between">
                            <span class="font-medium text-gray-800">Bagaimana cara memberikan review?</span>
                            <span class="transform group-open:rotate-180 transition-transform duration-200">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </span>
                        </summary>
                        <p class="px-6 py-4 text-gray-600 border-t border-gray-100">
                            Anda perlu membuat akun dan melakukan check-in di lokasi untuk dapat memberikan review yang
                            terverifikasi.
                        </p>
                    </details>
                </div>
            </div>
        </section>

        <hr>

        <!-- Kontak -->
        <section id="kontak" class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50 animate-on-scroll">
            <div class="container mx-auto max-w-6xl px-4">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">📞 Hubungi Kami</h2>
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Informasi Kontak -->
                    <div class="space-y-8">
                        <address class="not-italic bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Bali Kuliner Finder</h3>
                            <div class="space-y-3 text-gray-600">
                                <p class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Jl. Kuliner No. 123, Denpasar, Bali 80234</span>
                                </p>
                                <p class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                    <a href="tel:+62361123456" class="hover:text-blue-600 transition">+62 361
                                        123456</a>
                                </p>
                                <p class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                    <a href="mailto:info@balikulinerfinder.com"
                                        class="hover:text-blue-600 transition">info@balikulinerfinder.com</a>
                                </p>
                                <p class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.13a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                    </svg>
                                    <a href="https://wa.me/628123456789" class="hover:text-blue-600 transition">+62
                                        812 3456 789</a>
                                </p>
                            </div>
                        </address>

                        <div class="bg-white rounded-xl shadow-lg p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-4">Ikuti Kami di Media Sosial</h3>
                            <div class="flex space-x-4">
                                <a href="https://instagram.com/balikulinerfinder"
                                    class="text-gray-600 hover:text-pink-600 transition">
                                    <span class="sr-only">Instagram</span>
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="https://facebook.com/balikulinerfinder"
                                    class="text-gray-600 hover:text-blue-600 transition">
                                    <span class="sr-only">Facebook</span>
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="https://twitter.com/balikuliner"
                                    class="text-gray-600 hover:text-blue-400 transition">
                                    <span class="sr-only">Twitter</span>
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                                <a href="https://tiktok.com/@balikulinerfinder"
                                    class="text-gray-600 hover:text-black transition">
                                    <span class="sr-only">TikTok</span>
                                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 015.2-2.32V9.39a8.66 8.66 0 005.52 2.45V8.38c.34 0 .67.05 1 .05a4.67 4.67 0 004.07-2.34l-3.37-1.4z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Form Kontak -->
                    <div>
                        <form action="/kirim-pesan" method="post"
                            class="bg-white rounded-xl shadow-lg p-8 space-y-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-6">Kirim Pesan</h3>
                            <div>
                                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama</label>
                                <input type="text" id="nama" name="nama" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            <div>
                                <label for="email-kontak" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email-kontak" name="email-kontak" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            <div>
                                <label for="subjek" class="block text-gray-700 font-medium mb-2">Subjek</label>
                                <input type="text" id="subjek" name="subjek" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            </div>
                            <div>
                                <label for="pesan" class="block text-gray-700 font-medium mb-2">Pesan</label>
                                <textarea id="pesan" name="pesan" rows="6" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 px-6 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition shadow-md">
                                ✉️ Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-layout.user>
