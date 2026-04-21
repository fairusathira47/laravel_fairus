<!DOCTYPE html>
<html>
<head>
    <title>PilarJuang</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #0f172a, #1e3a8a);
            color: white;
        }

        /* NAVBAR */
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
        }

        .navbar a:hover {
            color: #38bdf8;
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
        }

        h1 {
            color: #38bdf8;
            text-align: center;
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
        @yield('content')
    </div>
</div>

</body>
</html>