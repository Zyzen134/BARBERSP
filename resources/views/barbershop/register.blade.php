<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Cut Cheap | Register</title>
    <style>
        :root {
            --sand: #f6efe7;
            --cream: #fff8f1;
            --ink: #1b1a17;
            --accent: #2f2a25;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Georgia", "Times New Roman", serif;
            color: var(--ink);
            background: radial-gradient(1200px 600px at 90% 10%, #ffffff 0%, var(--cream) 45%, var(--sand) 100%);
            min-height: 100vh;
        }
        .shell {
            max-width: 980px;
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
        .wrap {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 24px;
            align-items: center;
        }
        .panel {
            background: #ffffff;
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 12px 30px rgba(27, 26, 23, 0.08);
            border: 1px solid #efe4d8;
        }
        h1 { margin: 0 0 12px; font-size: 36px; }
        p { margin: 0 0 18px; color: #6f6256; line-height: 1.6; font-family: "Trebuchet MS", Arial, sans-serif; }
        .field { margin-bottom: 12px; }
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
        .btn.secondary {
            background: #efe4d8;
            color: #3d342d;
            margin-top: 10px;
            text-align: center;
            text-decoration: none;
        }
        @media (max-width: 900px) {
            .wrap { grid-template-columns: 1fr; }
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
                    <small>Register</small>
                </div>
            </div>
            <a class="back-link" href="/barbershop">Kembali ke Barbershop</a>
        </div>

        <div class="wrap">
            <div>
                <h1>Buat akun baru.</h1>
                <p>Daftar untuk menyimpan preferensi gaya rambut dan mempercepat booking.</p>
            </div>
            <form class="panel" onsubmit="event.preventDefault(); localStorage.setItem('barbershop_user','1'); window.location.href='/barbershop';">
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
                <div class="field">
                    <label for="reg-pass">Password</label>
                    <input id="reg-pass" type="password" placeholder="Buat password" required>
                </div>
                <button class="btn" type="submit">Daftar</button>
                <a class="btn secondary" href="/login">Sudah punya akun? Login</a>
            </form>
        </div>
    </div>
</body>
</html>
