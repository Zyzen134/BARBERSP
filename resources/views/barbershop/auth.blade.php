<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Cut Cheap | Login & Register</title>
    <style>
        :root {
            --sand: #f6efe7;
            --cream: #fff8f1;
            --ink: #1b1a17;
            --stone: #c9b9a8;
            --coffee: #7b5e43;
            --accent: #2f2a25;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Georgia", "Times New Roman", serif;
            color: var(--ink);
            background: radial-gradient(1200px 600px at 10% 10%, #ffffff 0%, var(--cream) 45%, var(--sand) 100%);
            min-height: 100vh;
        }
        .shell {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px 60px;
        }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .brand-badge {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: var(--accent);
            display: grid;
            place-items: center;
            color: #fff;
            font-size: 18px;
        }
        .brand small {
            display: block;
            font-weight: 400;
            color: #6f6256;
            font-size: 12px;
            margin-top: 2px;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .back-link {
            text-decoration: none;
            color: var(--accent);
            font-weight: 600;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .hero {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 28px;
            align-items: center;
            margin-bottom: 28px;
        }
        .hero h1 {
            font-size: 40px;
            margin: 0 0 12px;
        }
        .hero p {
            margin: 0;
            color: #6f6256;
            line-height: 1.6;
            max-width: 520px;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
        }
        .card {
            background: #ffffff;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 12px 30px rgba(27, 26, 23, 0.08);
            border: 1px solid #efe4d8;
        }
        .card h2 {
            font-size: 22px;
            margin: 0 0 6px;
        }
        .card p {
            margin: 0 0 18px;
            color: #6f6256;
            font-size: 14px;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .field {
            margin-bottom: 12px;
        }
        .field label {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #7a6d61;
            margin-bottom: 6px;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .field input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 12px;
            border: 1px solid #e6d9cb;
            background: #fffaf4;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .btn {
            display: inline-block;
            width: 100%;
            border: none;
            border-radius: 12px;
            padding: 12px 16px;
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .btn.light {
            background: #efe4d8;
            color: #3d342d;
            margin-top: 8px;
        }
        .footer-note {
            margin-top: 14px;
            font-size: 12px;
            color: #8a7b6e;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        @media (max-width: 900px) {
            .hero { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="shell">
        <div class="topbar">
            <div class="brand">
                <div class="brand-badge">MC</div>
                <div>
                    Mr.Cut Cheap
                    <small>Login & Register</small>
                </div>
            </div>
            <a class="back-link" href="/barbershop">Kembali ke Barbershop</a>
        </div>

        <section class="hero">
            <div>
                <h1>Masuk dulu, biar booking kamu makin cepat.</h1>
                <p>
                    Buat akun atau masuk untuk menyimpan preferensi gaya rambut,
                    jadwal favorit, dan akses promo khusus pelanggan setia.
                </p>
            </div>
            <div class="card" style="background: #2f2a25; color: #fff;">
                <h2 style="margin-bottom: 10px;">Langsung ke Barbershop</h2>
                <p style="color: #e6d9cb;">Belum mau login? Kamu tetap bisa jelajahi layanan kami.</p>
                <a href="/barbershop" class="btn light" style="text-align:center;">Lihat Halaman Barbershop</a>
                <div class="footer-note" style="color:#d5c3b2;">Bisa login kapan saja nanti.</div>
            </div>
        </section>

        <section class="cards">
            <form id="login-card" class="card" onsubmit="event.preventDefault(); window.location.href='/register';">
                <h2>Login</h2>
                <p>Masuk untuk melihat riwayat booking dan promo khusus.</p>
                <div class="footer-note" style="margin-top:-6px;">Belum punya akun? Kamu akan diarahkan ke register dulu.</div>
                <div class="field">
                    <label for="login-email">Email</label>
                    <input id="login-email" type="email" placeholder="nama@email.com" required>
                </div>
                <div class="field">
                    <label for="login-pass">Password</label>
                    <input id="login-pass" type="password" placeholder="********" required>
                </div>
                <button class="btn" type="submit">Masuk (Akan ke Register)</button>
                <div class="footer-note">Lupa password? Hubungi admin barbershop.</div>
            </form>

            <form id="register-card" class="card" onsubmit="event.preventDefault(); window.location.href='/login';">
                <h2>Register</h2>
                <p>Buat akun agar booking lebih cepat dan rapi.</p>
                <div class="field">
                    <label for="reg-name">Nama</label>
                    <input id="reg-name" type="text" placeholder="Nama lengkap" required>
                </div>
                <div class="field">
                    <label for="reg-email">Email</label>
                    <input id="reg-email" type="email" placeholder="nama@email.com" required>
                </div>
                <div class="field">
                    <label for="reg-phone">No. HP</label>
                    <input id="reg-phone" type="tel" placeholder="08xx-xxxx-xxxx" required>
                </div>
                <button class="btn" type="submit">Daftar (Kembali ke Login)</button>
                <div class="footer-note">Data aman, hanya untuk booking.</div>
            </form>
        </section>
    </div>
    <script>
        (function () {
            const params = new URLSearchParams(window.location.search);
            const mode = params.get("mode");
            const loginCard = document.getElementById("login-card");
            const registerCard = document.getElementById("register-card");
            if (!loginCard || !registerCard) return;

            if (mode === "register") {
                registerCard.scrollIntoView({ behavior: "smooth", block: "center" });
                registerCard.style.boxShadow = "0 16px 40px rgba(47, 42, 37, 0.18)";
            } else if (mode === "login") {
                loginCard.scrollIntoView({ behavior: "smooth", block: "center" });
                loginCard.style.boxShadow = "0 16px 40px rgba(47, 42, 37, 0.18)";
            }
        })();
    </script>
</body>
</html>
