import { useState, useEffect } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { 
  Scissors, 
  Clock, 
  MapPin, 
  Phone, 
  Share2, 
  Globe, 
  ChevronRight, 
  Star, 
  CheckCircle2,
  Menu,
  X
} from 'lucide-react';

// --- Types ---
interface Service {
  name: string;
  price: string;
  description: string;
  tag?: string;
}

interface HaircutStyle {
  id: number;
  name: string;
  image: string;
}

// --- Data ---
const SERVICES: Service[] = [
  { 
    name: 'Gentleman Cut', 
    price: 'Rp 25.000', 
    description: 'Potongan rambut klasik dengan finishing rapi.', 
    tag: 'Terpopuler' 
  },
  { 
    name: 'Skin Fade', 
    price: 'Rp 30.000', 
    description: 'Gradasi tipis yang tajam dan modern.', 
    tag: 'Trendi' 
  },
  { 
    name: 'Hair Wash & Massage', 
    price: 'Rp 15.000', 
    description: 'Cuci rambut segar dengan pijatan rileks.', 
  },
  { 
    name: 'Full Package', 
    price: 'Rp 40.000', 
    description: 'Potong + Cuci + Pijatan + Styling.', 
    tag: 'Termurah' 
  },
];

const STYLES: HaircutStyle[] = [
  { id: 1, name: 'Modern Buzz Cut', image: '/images/haircuts/buzzcut.jpg' },
  { id: 2, name: 'Classic Pompadour', image: '/images/haircuts/pompadour.jpg' },
  { id: 3, name: 'Sharp Skin Fade', image: '/images/haircuts/fade.jpg' },
  { id: 4, name: 'Trendy Undercut', image: '/images/haircuts/undercut.jpg' },
  { id: 5, name: 'Clean Taper Fade', image: '/images/haircuts/taper.jpg' },
  { id: 6, name: 'Gentle Side Part', image: '/images/haircuts/sidepart.jpg' },
];

// --- Components ---

const Navbar = () => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isLoggedIn, setIsLoggedIn] = useState(false);

  useEffect(() => {
    const handleScroll = () => setIsScrolled(window.scrollY > 50);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  useEffect(() => {
    setIsLoggedIn(localStorage.getItem("barbershop_user") === "1");
  }, []);

  const handleLogout = (e: React.MouseEvent<HTMLAnchorElement>) => {
    e.preventDefault();
    localStorage.removeItem("barbershop_user");
    window.location.href = "/login";
  };

  const navLinks = [
    { name: 'Home', href: '#home' },
    { name: 'Harga', href: '#pricing' },
    { name: 'Gaya', href: '#gallery' },
    { name: 'Tentang', href: '#about' },
    { name: 'Kontak', href: '#contact' },
  ];

  return (
    <nav className={`fixed w-full z-50 transition-all duration-300 ${isScrolled ? 'bg-white/80 backdrop-blur-md py-3 shadow-sm' : 'bg-transparent py-5'}`}>
      <div className="max-w-7xl mx-auto px-6 flex justify-between items-center">
        <motion.div 
          initial={{ opacity: 0, x: -20 }}
          animate={{ opacity: 1, x: 0 }}
          className="flex items-center gap-2"
        >
          <div className="bg-stone-800 p-2 rounded-lg">
            <Scissors className="text-stone-100 w-5 h-5" />
          </div>
          <span className="text-xl font-bold tracking-tight text-stone-800">Mr.Cut <span className="text-stone-500">Cheap</span></span>
        </motion.div>

        {/* Desktop Nav */}
        <div className="hidden md:flex items-center gap-6">
          {navLinks.map((link, i) => (
            <motion.a 
              key={link.name}
              href={link.href}
              initial={{ opacity: 0, y: -10 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ delay: i * 0.1 }}
              className="text-sm font-medium text-stone-600 hover:text-stone-900 transition-colors"
            >
              {link.name}
            </motion.a>
          ))}
          <motion.a
            href="/profile"
            initial={{ opacity: 0, y: -10 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: navLinks.length * 0.1 }}
            className="text-sm font-semibold text-stone-700 hover:text-stone-900 transition-colors bg-stone-100 px-3 py-1.5 rounded-full"
          >
            Profil
          </motion.a>
          <motion.a
            href="/"
            initial={{ opacity: 0, y: -10 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ delay: (navLinks.length + 1) * 0.1 }}
            className="text-sm font-semibold text-stone-700 hover:text-stone-900 transition-colors bg-stone-200 px-3 py-1.5 rounded-full"
          >
            Logout
          </motion.a>
          {isLoggedIn && (
            <motion.a
              href="/profile"
              initial={{ opacity: 0, scale: 0.8 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: (navLinks.length + 2) * 0.1 }}
              className="bg-stone-100 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-stone-200 transition-all"
            >
              Profile
            </motion.a>
          )}
          {isLoggedIn && (
            <motion.a
              href="/login"
              onClick={handleLogout}
              initial={{ opacity: 0, scale: 0.8 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: (navLinks.length + 3) * 0.1 }}
              className="bg-stone-200 text-stone-800 px-4 py-2 rounded-full text-sm font-semibold hover:bg-stone-300 transition-all"
            >
              Logout
            </motion.a>
          )}
          <motion.a 
            href="#contact"
            initial={{ opacity: 0, scale: 0.8 }}
            animate={{ opacity: 1, scale: 1 }}
            className="bg-stone-800 text-stone-100 px-5 py-2 rounded-full text-sm font-medium hover:bg-stone-700 transition-all"
          >
            Booking Now
          </motion.a>
        </div>

        {/* Mobile Toggle */}
        <div className="md:hidden">
          <button onClick={() => setIsMenuOpen(!isMenuOpen)} className="text-stone-800">
            {isMenuOpen ? <X /> : <Menu />}
          </button>
        </div>
      </div>

      {/* Mobile Menu */}
      <AnimatePresence>
        {isMenuOpen && (
          <motion.div 
            initial={{ opacity: 0, height: 0 }}
            animate={{ opacity: 1, height: 'auto' }}
            exit={{ opacity: 0, height: 0 }}
            className="md:hidden bg-stone-50 border-b border-stone-200 overflow-hidden"
          >
            <div className="flex flex-col p-6 gap-4">
              {navLinks.map((link) => (
                <a 
                  key={link.name} 
                  href={link.href} 
                  onClick={() => setIsMenuOpen(false)}
                  className="text-stone-600 hover:text-stone-900 font-medium"
                >
                  {link.name}
                </a>
              ))}
              {isLoggedIn && (
                <a
                  href="/profile"
                  onClick={() => setIsMenuOpen(false)}
                  className="text-stone-600 hover:text-stone-900 font-medium"
                >
                  Profil
                </a>
              )}
              {isLoggedIn && (
                <a
                  href="/login"
                  onClick={(e) => {
                    setIsMenuOpen(false);
                    handleLogout(e);
                  }}
                  className="text-stone-600 hover:text-stone-900 font-medium"
                >
                  Logout
                </a>
              )}
            </div>
          </motion.div>
        )}
      </AnimatePresence>
    </nav>
  );
};

const Hero = () => {
  return (
    <section id="home" className="relative min-h-screen flex items-center pt-20 overflow-hidden bg-[#FDFBF7]">
      {/* Background Elements */}
      <div className="absolute top-0 right-0 w-1/2 h-full bg-[#F5EEE6] rounded-l-[100px] -z-10 hidden lg:block" />
      <div className="absolute -bottom-20 -left-20 w-64 h-64 bg-stone-200 rounded-full blur-3xl opacity-50 -z-10" />
      
      <div className="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
        <motion.div 
          initial={{ opacity: 0, x: -50 }}
          whileInView={{ opacity: 1, x: 0 }}
          transition={{ duration: 0.8 }}
          viewport={{ once: true }}
          className="space-y-8"
        >
          <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-stone-200 text-stone-600 text-xs font-bold uppercase tracking-wider">
            <Star className="w-3 h-3 fill-stone-600" />
            <span>Kualitas Premium, Harga Rakyat</span>
          </div>
          <h1 className="text-6xl md:text-7xl font-bold text-stone-800 leading-[1.1]">
            Tampil <span className="text-stone-400 italic font-serif">Stylish</span> <br /> 
            Tanpa Kuras <span className="text-stone-600">Kantong.</span>
          </h1>
          <p className="text-lg text-stone-500 max-w-lg leading-relaxed">
            Mr.Cut Cheap menghadirkan pengalaman grooming modern dengan sentuhan minimalis. Kami percaya setiap pria berhak tampil maksimal dengan harga yang masuk akal.
          </p>
          <div className="flex flex-wrap gap-4">
            <motion.a 
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              href="#pricing" 
              className="bg-stone-800 text-stone-100 px-8 py-4 rounded-full font-semibold flex items-center gap-2 group"
            >
              Lihat Daftar Harga
              <ChevronRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
            </motion.a>
            <motion.a 
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              href="#gallery" 
              className="bg-white border border-stone-200 text-stone-800 px-8 py-4 rounded-full font-semibold hover:bg-stone-50 transition-colors"
            >
              Eksplor Gaya
            </motion.a>
          </div>
        </motion.div>

        <motion.div 
          initial={{ opacity: 0, scale: 0.8 }}
          whileInView={{ opacity: 1, scale: 1 }}
          transition={{ duration: 0.8 }}
          viewport={{ once: true }}
          className="relative"
        >
          <div className="relative z-10 rounded-3xl overflow-hidden shadow-2xl rotate-3 hover:rotate-0 transition-transform duration-500">
            <img 
              src="https://images.unsplash.com/photo-1503951906201-90a5f773767e?auto=format&fit=crop&q=80&w=800" 
              alt="Barber Shop" 
              className="w-full h-auto"
            />
          </div>
          {/* Decorative Card */}
          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.5 }}
            className="absolute -bottom-6 -left-6 z-20 bg-white p-6 rounded-2xl shadow-xl max-w-xs hidden md:block"
          >
            <div className="flex items-center gap-4 mb-3">
              <div className="bg-green-100 p-2 rounded-full text-green-600">
                <CheckCircle2 className="w-5 h-5" />
              </div>
              <span className="font-bold text-stone-800">Trusted Barber</span>
            </div>
            <p className="text-sm text-stone-500">"Potongan paling rapi dengan harga yang sangat terjangkau. Recommended!"</p>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
};

const Pricing = () => {
  return (
    <section id="pricing" className="py-24 bg-[#F5EEE6]">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16 space-y-4">
          <motion.h2 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="text-4xl md:text-5xl font-bold text-stone-800"
          >
            Daftar Harga <span className="text-stone-400">Terjangkau</span>
          </motion.h2>
          <motion.p 
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ delay: 0.1 }}
            viewport={{ once: true }}
            className="text-stone-500 max-w-xl mx-auto"
          >
            Harga jujur, kualitas juara. Pilih layanan yang sesuai dengan kebutuhan gaya rambutmu.
          </motion.p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          {SERVICES.map((service, i) => (
            <motion.div 
              key={service.name}
              initial={{ opacity: 0, y: 30 }}
              whileInView={{ opacity: 1, y: 0 }}
              transition={{ delay: i * 0.1 }}
              viewport={{ once: true }}
              whileHover={{ y: -10 }}
              className="bg-white p-8 rounded-3xl shadow-sm border border-stone-100 flex flex-col h-full relative overflow-hidden group"
            >
              {service.tag && (
                <div className="absolute top-4 right-4 bg-stone-800 text-stone-100 text-[10px] font-bold px-2 py-1 rounded-md uppercase">
                  {service.tag}
                </div>
              )}
              <h3 className="text-xl font-bold text-stone-800 mb-2">{service.name}</h3>
              <div className="text-3xl font-bold text-stone-900 mb-4">{service.price}</div>
              <p className="text-stone-500 text-sm leading-relaxed mb-8 flex-grow">{service.description}</p>
              <motion.button 
                whileTap={{ scale: 0.95 }}
                className="w-full py-3 rounded-xl bg-stone-100 text-stone-600 font-semibold group-hover:bg-stone-800 group-hover:text-stone-100 transition-all duration-300"
              >
                Pilih Layanan
              </motion.button>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

const Gallery = () => {
  return (
    <section id="gallery" className="py-24 bg-white">
      <div className="max-w-7xl mx-auto px-6">
        <div className="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
          <div className="space-y-4">
            <motion.h2 
              initial={{ opacity: 0, x: -20 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
              className="text-4xl md:text-5xl font-bold text-stone-800"
            >
              Inspirasi <span className="text-stone-400">Gaya</span>
            </motion.h2>
            <motion.p 
              initial={{ opacity: 0, x: -20 }}
              whileInView={{ opacity: 1, x: 0 }}
              transition={{ delay: 0.1 }}
              viewport={{ once: true }}
              className="text-stone-500 max-w-md"
            >
              Bingung mau potong gaya apa? Cek beberapa referensi gaya rambut terpopuler di Mr.Cut Cheap.
            </motion.p>
          </div>
          <motion.div 
            initial={{ opacity: 0 }}
            whileInView={{ opacity: 1 }}
            viewport={{ once: true }}
            className="text-stone-400 text-sm font-medium"
          >
            Scroll untuk melihat lebih banyak &rarr;
          </motion.div>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          {STYLES.map((style, i) => (
            <motion.div 
              key={style.id}
              initial={{ opacity: 0, scale: 0.9 }}
              whileInView={{ opacity: 1, scale: 1 }}
              transition={{ delay: i * 0.1 }}
              viewport={{ once: true }}
              className="group relative aspect-[4/5] overflow-hidden rounded-3xl cursor-pointer"
            >
              <motion.img 
                whileHover={{ scale: 1.1 }}
                transition={{ duration: 0.6 }}
                src={style.image} 
                alt={style.name} 
                className="w-full h-full object-cover transition-all"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-stone-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-8">
                <div className="text-white">
                  <p className="text-sm font-medium text-stone-300 mb-1">Haircut Style</p>
                  <h3 className="text-2xl font-bold">{style.name}</h3>
                </div>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

const About = () => {
  return (
    <section id="about" className="py-24 bg-[#FDFBF7]">
      <div className="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
        <motion.div 
          initial={{ opacity: 0, x: -50 }}
          whileInView={{ opacity: 1, x: 0 }}
          viewport={{ once: true }}
          className="relative"
        >
          <div className="rounded-3xl overflow-hidden shadow-xl relative z-10">
            <img 
              src="https://images.unsplash.com/photo-1585747860612-78198a19b784?auto=format&fit=crop&q=80&w=800" 
              alt="About Barber" 
              className="w-full h-auto"
            />
          </div>
          <div className="absolute -top-6 -right-6 w-32 h-32 bg-stone-200 rounded-full -z-0" />
          <div className="absolute -bottom-6 -left-6 w-24 h-24 bg-stone-100 rounded-full -z-0" />
        </motion.div>

        <motion.div 
          initial={{ opacity: 0, x: 50 }}
          whileInView={{ opacity: 1, x: 0 }}
          viewport={{ once: true }}
          className="space-y-6"
        >
          <h2 className="text-4xl font-bold text-stone-800">Lebih dari Sekadar <br /><span className="text-stone-400">Potong Rambut.</span></h2>
          <p className="text-stone-500 leading-relaxed">
            Mr.Cut Cheap didirikan dengan misi sederhana: memberikan layanan grooming berkualitas tinggi yang bisa diakses oleh semua kalangan. Kami mengombinasikan teknik cukur modern dengan suasana yang tenang dan nyaman.
          </p>
          <div className="grid grid-cols-2 gap-6 pt-4">
            <div className="space-y-2">
              <div className="flex items-center gap-2 text-stone-800 font-bold">
                <CheckCircle2 className="w-4 h-4 text-stone-400" />
                <span>Barber Berlisensi</span>
              </div>
              <div className="flex items-center gap-2 text-stone-800 font-bold">
                <CheckCircle2 className="w-4 h-4 text-stone-400" />
                <span>Alat Steril</span>
              </div>
            </div>
            <div className="space-y-2">
              <div className="flex items-center gap-2 text-stone-800 font-bold">
                <CheckCircle2 className="w-4 h-4 text-stone-400" />
                <span>Harga Transparan</span>
              </div>
              <div className="flex items-center gap-2 text-stone-800 font-bold">
                <CheckCircle2 className="w-4 h-4 text-stone-400" />
                <span>Tempat Nyaman</span>
              </div>
            </div>
          </div>
        </motion.div>
      </div>
    </section>
  );
};

const Contact = () => {
  return (
    <section id="contact" className="py-24 bg-stone-900 text-stone-100">
      <div className="max-w-7xl mx-auto px-6">
        <div className="grid lg:grid-cols-2 gap-16">
          <div className="space-y-8">
            <h2 className="text-4xl font-bold">Kunjungi <span className="text-stone-500">Studio Kami.</span></h2>
            <p className="text-stone-400 leading-relaxed">
              Siap untuk perubahan penampilan? Langsung datang atau booking jadwalmu sekarang agar tidak perlu mengantri lama.
            </p>
            
            <div className="space-y-6">
              <div className="flex items-start gap-4">
                <div className="bg-stone-800 p-3 rounded-xl">
                  <MapPin className="w-6 h-6 text-stone-400" />
                </div>
                <div>
                  <h4 className="font-bold mb-1">Alamat</h4>
                  <p className="text-stone-400">Jl. Pasir Putih No. 123, Kota Estetik, Indonesia</p>
                </div>
              </div>
              <div className="flex items-start gap-4">
                <div className="bg-stone-800 p-3 rounded-xl">
                  <Clock className="w-6 h-6 text-stone-400" />
                </div>
                <div>
                  <h4 className="font-bold mb-1">Jam Operasional</h4>
                  <p className="text-stone-400">Senin - Minggu: 10:00 - 21:00 WIB</p>
                </div>
              </div>
              <div className="flex items-start gap-4">
                <div className="bg-stone-800 p-3 rounded-xl">
                  <Phone className="w-6 h-6 text-stone-400" />
                </div>
                <div>
                  <h4 className="font-bold mb-1">Kontak</h4>
                  <p className="text-stone-400">+62 812 3456 7890</p>
                </div>
              </div>
            </div>
          </div>

          <div className="bg-stone-800 p-8 rounded-3xl space-y-6">
            <h3 className="text-2xl font-bold mb-6">Kirim Pesan / Booking</h3>
            <form className="space-y-4" onSubmit={(e) => e.preventDefault()}>
              <div className="grid md:grid-cols-2 gap-4">
                <input 
                  type="text" 
                  placeholder="Nama Lengkap" 
                  className="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all"
                />
                <input 
                  type="email" 
                  placeholder="Email" 
                  className="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all"
                />
              </div>
              <select className="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all">
                <option>Pilih Layanan</option>
                {SERVICES.map(s => <option key={s.name}>{s.name}</option>)}
              </select>
              <textarea 
                rows={4} 
                placeholder="Catatan Tambahan (Opsional)" 
                className="w-full bg-stone-900 border border-stone-700 rounded-xl px-4 py-3 text-stone-100 focus:outline-none focus:ring-2 focus:ring-stone-500 transition-all"
              />
              <button className="w-full py-4 rounded-xl bg-stone-100 text-stone-900 font-bold hover:bg-white transition-colors shadow-lg">
                Kirim Permintaan Booking
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  );
};

const Footer = () => {
  return (
    <footer className="py-12 bg-stone-950 text-stone-500 border-t border-stone-900">
      <div className="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
        <div className="flex items-center gap-2">
          <div className="bg-stone-800 p-1.5 rounded-lg">
            <Scissors className="text-stone-400 w-4 h-4" />
          </div>
          <span className="text-lg font-bold tracking-tight text-stone-300">Mr.Cut <span className="text-stone-600">Cheap</span></span>
        </div>
        
        <div className="flex gap-6">
          <a href="#" className="hover:text-stone-100 transition-colors"><Share2 className="w-5 h-5" /></a>
          <a href="#" className="hover:text-stone-100 transition-colors"><Globe className="w-5 h-5" /></a>
        </div>
        
        <p className="text-sm">
          &copy; {new Date().getFullYear()} Mr.Cut Cheap Barbershop. All rights reserved.
        </p>
      </div>
    </footer>
  );
};

export default function App() {
  return (
    <div className="font-sans text-stone-900 selection:bg-stone-200 selection:text-stone-900">
      <Navbar />
      <main>
        <Hero />
        <Pricing />
        <Gallery />
        <About />
        <Contact />
      </main>
      <Footer />
    </div>
  );
}
