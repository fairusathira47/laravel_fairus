<!DOCTYPE html>
<html>
<head>
    <title>PilarJuang</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            width: 65%;
            box-shadow: 0 0 40px rgba(0,0,0,0.5);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .himpunan {
            font-size: 18px;
            color: #94a3b8;
            letter-spacing: 1px;
        }

        .kabinet {
            font-size: 22px;
            font-weight: bold;
            color: #facc15;
        }

        h1 {
            color: #38bdf8;
            font-size: 40px;
            margin: 10px 0;
        }

        h2 {
            margin-top: 30px;
            color: #60a5fa;
        }

        p {
            line-height: 1.7;
            text-align: justify;
        }

        .tagline {
            font-style: italic;
            color: #cbd5f5;
            text-align: center;
        }

        ul {
            text-align: left;
            padding-left: 25px;
            line-height: 1.8;
        }

        li {
            margin-bottom: 10px;
        }

        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid rgba(255,255,255,0.2);
            font-size: 14px;
            color: #94a3b8;
        }

        .email {
            color: #38bdf8;
            font-weight: bold;
        }

        .creator {
            margin-top: 10px;
            font-size: 13px;
            color: #64748b;
        }
        .navbar {
        display: flex;
        justify-content: center;
        background: rgba(0,0,0,0.3);
        padding: 15px;
        gap: 30px;
        }

        .navbar a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
        }

        .navbar a:hover {
         color: #38bdf8;
        }
    </style>
    
</head>

<body>

<nav class="navbar">
    <a href="/">Home</a>
    <a href="/tentang">Tentang</a>
    <a href="/struktur">Struktur</a>
    <a href="/kontak">Kontak</a>
</nav>

<div class="container">
    <div class="card">

        <div class="header">
            <div class="himpunan">HIMPUNAN MAHASISWA INFORMATIKA</div>
            <div class="kabinet">Kabinet Pilar Juang</div>
        </div>

        <h1>STRUKTUR DEPARTEMEN</h1>
        <p class="tagline">Susunan Kepengurusan Himpunan Mahasiswa Informatika</p>

        <h2>👑 Ketua & Wakil Ketua</h2>
        <ul>
            <li>Ketua Umum: Peri Irawan</li>
            <li>Wakil Ketua: Ikbal Mindarsah</li>
        </ul>

        <h2>📊 Departemen PWTI</h2>
        <ul>
            <li>Kepala Departemen: Imam Ikhlasul</li>
            <li>Anggota: Utami, wahyu, Tia, Alfadrian, Hamzan, Putra, Ayyat, Rian, Liza</li>
        </ul>

        <h2>💻 Departemen PSDM</h2>
        <ul>
            <li>Kepala Departemen: Yusuf</li>
            <li>Anggota: Ahmad, Rina, Awang, Muhva, Risyad, Ling, Nadita, Laela, Bima, Daril, Khusnul</li>
        </ul>

        <h2>🎯 Departemen SOSMAS</h2>
        <ul>
            <li>Kepala Departemen: Teguh Bagus</li>
            <li>Anggota: Mastari, Lina, Verdi, Azmi, EL, Ilham, Thoni, Sukarni, Ebby, Hera, Tiwi</li>
        </ul>

        <h2> Departemen KESRA</h2>
        <ul>
            <li>Kepala Departemen: Aksa</li>
            <li>Anggota: Irsya, Mawardi, wanda, andika, cr, imam, ayub, rita, dela, marsha</li>
        </ul>

        <h2> Departemen MEDIA</h2>
        <ul>
            <li>Kepala Departemen: Nabila</li>
            <li>Anggota: dinda, dicky, tasri, wnda, salman, ratu, hanif</li>
        </ul>

        <h2> Departemen KWU</h2>
        <ul>
            <li>Kepala Departemen: dara</li>
            <li>Anggota: gilam, fadila, dalillah, sherly, fairus, alya,  aoliya, aura, baidaw</li>
        </ul>


        <div class="footer">
            📧 Email: <span class="email">hmit.uts</span>

            <div class="creator">
                Dibuat oleh: Fairus Aurelliya Athira
            </div>
        </div>

    </div>
</div>

</body>
</html>