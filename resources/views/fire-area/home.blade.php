<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Rawan Kebakaran</title>
    <style>
        /* Styling untuk tombol */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color:rgb(210, 181, 36);
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        /* Styling untuk konten utama */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f4f4f9;
        }

        h1 {
            color: #2c3e50;
        }

        h2 {
            color: #2c3e50;
        }

        ul {
            list-style-type: none;
        }

        li {
            margin: 10px 0;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Ini adalah sistem informasi daerah rawan kebakaran.</p>

    <!-- Tombol untuk pergi ke halaman About -->
    <a href="{{ route('about') }}" class="btn">Tentang Kami</a>

    <h2>Daerah Rawan Kebakaran</h2>
    <ul>
        @foreach($fireAreas as $area)
            <li>{{ $area->name }} - Risiko: {{ $area->risk_level }}</li>
        @endforeach
    </ul>
</body>
</html>
