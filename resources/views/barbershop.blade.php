<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Cut Cheap | Barbershop Termurah & Stylish</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="font-sans text-stone-900 selection:bg-stone-200 selection:text-stone-900">
        <!-- Navbar -->
        <nav class="fixed w-full z-50 transition-all duration-300 bg-white/80 backdrop-blur-md py-3 shadow-sm">
            <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <div class="bg-stone-800 p-2 rounded-lg">
                        <span class="text-stone-100 text-sm font-bold">✂</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-stone-800">Mr.Cut <span class="text-stone-500">Cheap</span></span>
                </div>
                <div class="hidden md:flex items-center gap-6">
                    <a href="#home" class="text-sm font-medium text-stone-600 hover:text-stone-900 transition-colors">Home</a>
                    <a href="#pricing" class="text-sm font-medium text-stone-600 hover:text-stone-900 transition-colors">Harga</a>
                    <a href="#gallery" class="text-sm font-medium text-stone-600 hover:text-stone-900 transition-colors">Gaya</a>
                    <a href="#about" class="text-sm font-medium text-stone-600 hover:text-stone-900 transition-colors">Tentang</a>
                    <a href="#contact" class="text-sm font-medium text-stone-600 hover:text-stone-900 transition-colors">Kontak</a>
                    <a href="/profile" class="bg-stone-100 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-stone-200 transition-all">Profile</a>
                    <a href="/login" class="bg-stone-200 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-stone-300 transition-all">Logout</a>
                    <a href="#contact" class="bg-stone-800 text-stone-100 px-5 py-2 rounded-full text-sm font-medium hover:bg-stone-700 transition-all">Booking Now</a>
                </div>
            </div>
        </nav>

        <main class="pt-20">
            <!-- Hero -->
            <section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-[#FDFBF7]">
                <div class="absolute top-0 right-0 w-1/2 h-full bg-[#F5EEE6] rounded-l-[100px] -z-10 hidden lg:block"></div>
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-stone-200 rounded-full blur-3xl opacity-50 -z-10"></div>

                <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-8">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-stone-200 text-stone-600 text-xs font-bold uppercase tracking-wider">
                            <span>★</span>
                            <span>Kualitas Premium, Harga Rakyat</span>
                        </div>
                        <h1 class="text-6xl md:text-7xl font-bold text-stone-800 leading-[1.1]">
                            Tampil <span class="text-stone-400 italic font-serif">Stylish</span><br>
                            Tanpa Kuras <span class="text-stone-600">Kantong.</span>
                        </h1>
                        <p class="text-lg text-stone-500 max-w-lg leading-relaxed">
                            Mr.Cut Cheap menghadirkan pengalaman grooming modern dengan sentuhan minimalis. Kami percaya setiap pria berhak tampil maksimal dengan harga yang masuk akal.
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#pricing" class="bg-stone-800 text-stone-100 px-8 py-4 rounded-full font-semibold flex items-center gap-2">
                                Lihat Daftar Harga
                                <span>›</span>
                            </a>
                            <a href="#gallery" class="bg-white border border-stone-200 text-stone-800 px-8 py-4 rounded-full font-semibold hover:bg-stone-50 transition-colors">
                                Eksplor Gaya
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1503951906201-90a5f773767e?auto=format&fit=crop&q=80&w=800" alt="Barber Shop" class="w-full h-auto">
                        </div>
                        <div class="absolute -bottom-6 -left-6 z-20 bg-white p-6 rounded-2xl shadow-xl max-w-xs hidden md:block">
                            <div class="flex items-center gap-4 mb-3">
                                <div class="bg-green-100 p-2 rounded-full text-green-600">✓</div>
                                <span class="font-bold text-stone-800">Trusted Barber</span>
                            </div>
                            <p class="text-sm text-stone-500">"Potongan paling rapi dengan harga yang sangat terjangkau. Recommended!"</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing -->
            <section id="pricing" class="py-24 bg-[#F5EEE6]">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16 space-y-4">
                        <h2 class="text-4xl md:text-5xl font-bold text-stone-800">
                            Daftar Harga <span class="text-stone-400">Terjangkau</span>
                        </h2>
                        <p class="text-stone-500 max-w-xl mx-auto">
                            Harga jujur, kualitas juara. Pilih layanan yang sesuai dengan kebutuhan gaya rambutmu.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white p-8 rounded-3xl shadow-sm border border-stone-100 flex flex-col h-full relative">
                            <div class="absolute top-4 right-4 bg-stone-800 text-stone-100 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Terpopuler</div>
                            <h3 class="text-xl font-bold text-stone-800 mb-2">Gentleman Cut</h3>
                            <div class="text-3xl font-bold text-stone-900 mb-4">Rp 25.000</div>
                            <p class="text-stone-500 text-sm leading-relaxed mb-8 flex-grow">Potongan rambut klasik dengan finishing rapi.</p>
                            <button class="w-full py-3 rounded-xl bg-stone-100 text-stone-600 font-semibold">Pilih Layanan</button>
                        </div>
                        <div class="bg-white p-8 rounded-3xl shadow-sm border border-stone-100 flex flex-col h-full relative">
                            <div class="absolute top-4 right-4 bg-stone-800 text-stone-100 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Trendi</div>
                            <h3 class="text-xl font-bold text-stone-800 mb-2">Skin Fade</h3>
                            <div class="text-3xl font-bold text-stone-900 mb-4">Rp 30.000</div>
                            <p class="text-stone-500 text-sm leading-relaxed mb-8 flex-grow">Gradasi tipis yang tajam dan modern.</p>
                            <button class="w-full py-3 rounded-xl bg-stone-100 text-stone-600 font-semibold">Pilih Layanan</button>
                        </div>
                        <div class="bg-white p-8 rounded-3xl shadow-sm border border-stone-100 flex flex-col h-full relative">
                            <h3 class="text-xl font-bold text-stone-800 mb-2">Hair Wash & Massage</h3>
                            <div class="text-3xl font-bold text-stone-900 mb-4">Rp 15.000</div>
                            <p class="text-stone-500 text-sm leading-relaxed mb-8 flex-grow">Cuci rambut segar dengan pijatan rileks.</p>
                            <button class="w-full py-3 rounded-xl bg-stone-100 text-stone-600 font-semibold">Pilih Layanan</button>
                        </div>
                        <div class="bg-white p-8 rounded-3xl shadow-sm border border-stone-100 flex flex-col h-full relative">
                            <div class="absolute top-4 right-4 bg-stone-800 text-stone-100 text-[10px] font-bold px-2 py-1 rounded-md uppercase">Termurah</div>
                            <h3 class="text-xl font-bold text-stone-800 mb-2">Full Package</h3>
                            <div class="text-3xl font-bold text-stone-900 mb-4">Rp 40.000</div>
                            <p class="text-stone-500 text-sm leading-relaxed mb-8 flex-grow">Potong + Cuci + Pijatan + Styling.</p>
                            <button class="w-full py-3 rounded-xl bg-stone-100 text-stone-600 font-semibold">Pilih Layanan</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Gallery -->
            <section id="gallery" class="py-24 bg-white">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                        <div class="space-y-4">
                            <h2 class="text-4xl md:text-5xl font-bold text-stone-800">
                                Inspirasi <span class="text-stone-400">Gaya</span>
                            </h2>
                            <p class="text-stone-500 max-w-md">
                                Bingung mau potong gaya apa? Cek beberapa referensi gaya rambut terpopuler di Mr.Cut Cheap.
                            </p>
                        </div>
                        <div class="text-stone-400 text-sm font-medium">Scroll untuk melihat lebih banyak →</div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="group relative aspect-[4/5] overflow-hidden rounded-3xl">
                            <img src="/images/haircuts/buzzcut.jpg" alt="Modern Buzz Cut" class="w-full h-full object-cover">
                        </div>
                        <div class="group relative aspect-[4/5] overflow-hidden rounded-3xl">
                            <img src="/images/haircuts/pompadour.jpg" alt="Classic Pompadour" class="w-full h-full object-cover">
                        </div>
                        <div class="group relative aspect-[4/5] overflow-hidden rounded-3xl">
                            <img src="/images/haircuts/fade.jpg" alt="Sharp Skin Fade" class="w-full h-full object-cover">
                        </div>
                        <div class="group relative aspect-[4/5] overflow-hidden rounded-3xl">
                            <img src="/images/haircuts/undercut.jpg" alt="Trendy Undercut" class="w-full h-full object-cover">
                        </div>
                        <div class="group relative aspect-[4/5] overflow-hidden rounded-3xl">
                            <img src="/images/haircuts/taper.jpg" alt="Clean Taper Fade" class="w-full h-full object-cover">
                        </div>
                        <div class="group relative aspect-[4/5] overflow-hidden rounded-3xl">
                            <img src="/images/haircuts/sidepart.jpg" alt="Gentle Side Part" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section id="about" class="py-24 bg-[#FDFBF7]">
                <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="rounded-3xl overflow-hidden shadow-xl relative z-10">
                            <img src="https://images.unsplash.com/photo-1585747860612-78198a19b784?auto=format&fit=crop&q=80&w=800" alt="About Barber" class="w-full h-auto">
                        </div>
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-stone-200 rounded-full -z-0"></div>
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-stone-100 rounded-full -z-0"></div>
                    </div>
                    <div class="space-y-6">
                        <h2 class="text-4xl font-bold text-stone-800">Lebih dari Sekadar <br><span class="text-stone-400">Potong Rambut.</span></h2>
                        <p class="text-stone-500 leading-relaxed">
                            Mr.Cut Cheap didirikan dengan misi sederhana: memberikan layanan grooming berkualitas tinggi yang bisa diakses oleh semua kalangan.
                        </p>
                        <div class="grid grid-cols-2 gap-6 pt-4">
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-stone-800 font-bold"><span class="text-stone-400">✓</span> Barber Berlisensi</div>
                                <div class="flex items-center gap-2 text-stone-800 font-bold"><span class="text-stone-400">✓</span> Alat Steril</div>
                            </div>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-stone-800 font-bold"><span class="text-stone-400">✓</span> Harga Transparan</div>
                                <div class="flex items-center gap-2 text-stone-800 font-bold"><span class="text-stone-400">✓</span> Tempat Nyaman</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="py-24 bg-stone-900 text-stone-100">
                <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16">
                    <div class="space-y-8">
                        <h2 class="text-4xl font-bold">Kunjungi <span class="text-stone-500">Studio Kami.</span></h2>
                        <p class="text-stone-400 leading-relaxed">
                            Siap untuk perubahan penampilan? Langsung datang atau booking jadwalmu sekarang agar tidak perlu mengantri lama.
                        </p>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="bg-stone-800 p-3 rounded-xl">📍</div>
                                <div>
                                    <h4 class="font-bold mb-1">Alamat</h4>
                                    <p class="text-stone-400">Jl. Pasir Putih No. 123, Kota Estetik, Indonesia</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-stone-800 p-3 rounded-xl">⏰</div>
                                <div>
                                    <h4 class="font-bold mb-1">Jam Operasional</h4>
                                    <p class="text-stone-400">Senin - Minggu: 10:00 - 21:00 WIB</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="bg-stone-800 p-3 rounded-xl">☎</div>
                                <div>
                                    <h4 class="font-bold mb-1">Kontak</h4>
                                    <p class="text-stone-400">+62 812 3456 7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-stone-800 p-8 rounded-3xl space-y-6">
                        <h3 class="text-2xl font-bold mb-6">Kirim Pesan / Booking</h3>
                        <form class="space-y-4" onsubmit="event.preventDefault()">
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Nama Lengkap" class="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all">
                                <input type="email" placeholder="Email" class="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all">
                            </div>
                            <select class="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all">
                                <option>Pilih Layanan</option>
                                <option>Gentleman Cut</option>
                                <option>Skin Fade</option>
                                <option>Hair Wash & Massage</option>
                                <option>Full Package</option>
                            </select>
                            <textarea rows="4" placeholder="Catatan Tambahan (Opsional)" class="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all"></textarea>
                            <button class="w-full py-4 rounded-xl bg-stone-100 text-stone-900 font-bold hover:bg-white transition-colors shadow-lg">
                                Kirim Permintaan Booking
                            </button>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="py-12 bg-stone-950 text-stone-500 border-t border-stone-900">
            <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex items-center gap-2">
                    <div class="bg-stone-800 p-1.5 rounded-lg">
                        <span class="text-stone-400 text-xs font-bold">✂</span>
                    </div>
                    <span class="text-lg font-bold tracking-tight text-stone-300">Mr.Cut <span class="text-stone-600">Cheap</span></span>
                </div>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-stone-100 transition-colors">Share</a>
                    <a href="#" class="hover:text-stone-100 transition-colors">Website</a>
                </div>
                <p class="text-sm">&copy; {{ date('Y') }} Mr.Cut Cheap Barbershop. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
