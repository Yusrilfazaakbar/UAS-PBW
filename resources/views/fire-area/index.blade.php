<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laporan</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            /* Background dengan gambar dari folder 'images' */
            background: url('images/menara.jpeg') no-repeat center center fixed, linear-gradient(135deg,rgb(16, 35, 63),rgb(249, 175, 3));
            background-size: cover;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
            font-size: 2.5em;
            color: #2c3e50;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .container {
            width: 100%;
            max-width: 800px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8); /* Transparan background untuk kontras */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }
        .report-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            background: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .report-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .report-card h3 {
            color: #e74c3c;
            margin: 0;
        }
        .report-card p {
            margin: 5px 0;
            color: #555;
        }
        .btn-container {
            text-align: center;
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            margin: 10px 5px;
            padding: 10px 20px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s ease;
        }
        .btn:hover {
            background: #2980b9;
        }
        .about-btn {
            background-color: #2ecc71;
        }
        .about-btn:hover {
            background-color: #27ae60;
        }
        .empty-message {
            text-align: center;
            color: #e74c3c;
            font-style: italic;
            margin: 20px 0;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Daftar Daerah Rawan Kebakaran</h1>

    <div class="container">
        <!-- Tampilkan pesan sukses jika ada -->
        @if (session('success'))
            <p style="color: green; text-align: center; font-weight: bold;">{{ session('success') }}</p>
        @endif

        <!-- Tampilkan laporan kebakaran -->
        @if ($fireAreas->isEmpty())
            <p class="empty-message">Belum ada laporan yang tersedia.</p>
        @else
            @foreach ($fireAreas as $area)
                <div class="report-card">
                    <h3>{{ $area->name }}</h3>
                    <p><strong>Deskripsi:</strong> {{ $area->description }}</p>
                    <p><strong>Tingkat Risiko:</strong> {{ $area->risk_level }}</p>
                </div>
            @endforeach
        @endif

        <div class="btn-container">
            <!-- Tombol untuk membuat laporan baru -->
            <a href="{{ route('report.create') }}" class="btn">Ajukan Laporan Baru</a>

            <!-- Tombol untuk halaman Tentang Kami -->
            <a href="{{ route('about') }}" class="btn about-btn">Tentang Kami</a>
        </div>
    </div>
</body>
</html>
