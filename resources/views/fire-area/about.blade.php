<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>

    <style>
        /* CSS untuk halaman About */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f1f1;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .about-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            max-width: 800px;
            margin: 0 auto;
        }

        .about-section {
            background-color: #fff;
            padding: 30px;
            margin: 20px 0;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
        }

        .about-section h2 {
            color: #e74c3c;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .team-members {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-items: center;
        }

        .team-member {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
        }

        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .team-member h3 {
            color: #34495e;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: #fff;
            margin-top: 40px;
            border-radius: 8px;
        }

        footer p {
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .team-members {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <h1>Tentang Kami</h1>

    <div class="about-container">
        <div class="about-section">
            <h2>Informasi Aplikasi</h2>
            <p>Aplikasi ini dibuat untuk memberikan informasi tentang daerah rawan kebakaran. Kami adalah tim pengembang yang berkomitmen untuk memberikan solusi yang efektif dalam memantau dan melaporkan daerah-daerah yang rentan terhadap kebakaran.</p>
        </div>

        <div class="about-section">
            <h2>Tim Pengembang</h2>
            <div class="team-members">
                <!-- Anggota 1 -->
                <div class="team-member">
                 <img src="{{ asset('images/yusrl.jpg') }}" alt="Yusril Faza Bajili Akbar">
                    <h3>Yusril Faza Bajili Akbar</h3>
                    <p>C050423045</p>
                </div>
                <!-- Anggota 2 -->
                <div class="team-member">
                <img src="{{ asset('images/arya.jpg') }}" alt="Muhammad Arya Ramadhan">
                    <h3>Muhammad Arya Ramadhan</h3>
                    <p>C050423029</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Sistem Informasi Rawan Kebakaran. All rights reserved.</p>
    </footer>

</body>
</html>
