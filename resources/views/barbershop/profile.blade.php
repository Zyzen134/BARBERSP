<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mr.Cut Cheap | Profil</title>
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
            background: radial-gradient(1200px 600px at 50% 0%, #ffffff 0%, var(--cream) 45%, var(--sand) 100%);
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
        .card {
            background: #ffffff;
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 12px 30px rgba(27, 26, 23, 0.08);
            border: 1px solid #efe4d8;
        }
        .profile {
            display: grid;
            grid-template-columns: 120px 1fr;
            gap: 24px;
            align-items: center;
        }
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 24px;
            background: #efe4d8;
            display: grid;
            place-items: center;
            font-size: 36px;
            font-weight: 700;
            color: #5a4b3e;
        }
        h1 { margin: 0 0 8px; font-size: 32px; }
        p { margin: 0 0 16px; color: #6f6256; line-height: 1.6; font-family: "Trebuchet MS", Arial, sans-serif; }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-top: 20px;
        }
        .item {
            background: #fffaf4;
            border: 1px solid #efe4d8;
            border-radius: 16px;
            padding: 14px 16px;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .item span {
            display: block;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #8a7b6e;
            margin-bottom: 6px;
        }
        .actions {
            display: flex;
            gap: 12px;
            margin-top: 22px;
        }
        .btn {
            display: inline-block;
            border: none;
            border-radius: 12px;
            padding: 12px 16px;
            background: var(--accent);
            color: #fff;
            font-weight: 700;
            cursor: pointer;
            text-decoration: none;
            font-family: "Trebuchet MS", Arial, sans-serif;
        }
        .btn.secondary {
            background: #efe4d8;
            color: #3d342d;
        }
        @media (max-width: 720px) {
            .profile { grid-template-columns: 1fr; text-align: center; }
            .avatar { margin: 0 auto; }
            .actions { justify-content: center; flex-wrap: wrap; }
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
                    <small>Profil Pengguna</small>
                </div>
            </div>
            <a class="back-link" href="/barbershop">Kembali ke Barbershop</a>
        </div>

        <div class="card">
            <div class="profile">
                <div class="avatar">AR</div>
                <div>
                    <h1>Ahmad Rizki</h1>
                    <p>Pelanggan setia Mr.Cut Cheap. Simpan preferensi gaya agar booking makin cepat.</p>
                    <div class="grid">
                        <div class="item">
                            <span>Email</span>
                            ahmad@email.com
                        </div>
                        <div class="item">
                            <span>No. HP</span>
                            08xx-xxxx-xxxx
                        </div>
                        <div class="item">
                            <span>Gaya Favorit</span>
                            Clean Taper Fade
                        </div>
                        <div class="item">
                            <span>Terakhir Booking</span>
                            02 April 2026
                        </div>
                    </div>
                    <div class="actions">
                        <a class="btn" href="/barbershop">Lanjut Booking</a>
                        <a class="btn secondary" href="/login">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
