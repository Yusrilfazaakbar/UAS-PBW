<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajukan Laporan Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            color: #555;
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        .error-list {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }
        .error-list li {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajukan Laporan Baru</h1>
        <!-- Tampilkan pesan validasi -->
        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <!-- Form Ajukan Laporan -->
        <form id="reportForm" action="{{ route('report.store') }}" method="POST">
            @csrf

            <label for="name">Nama Lokasi:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Deskripsi:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="risk_level">Tingkat Risiko (1-10):</label>
            <select id="risk_level" name="risk_level" required>
                @for ($i = 1; $i <= 10; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <button type="submit">Ajukan Laporan</button>
        </form>
    </div>

    <script>
        // JavaScript untuk validasi interaktif
        document.getElementById('reportForm').addEventListener('submit', function(event) {
            const name = document.getElementById('name').value.trim();
            const description = document.getElementById('description').value.trim();
            const riskLevel = document.getElementById('risk_level').value;

            if (!name || !description || !riskLevel) {
                alert('Semua bidang wajib diisi!');
                event.preventDefault();
            } else if (name.length < 3) {
                alert('Nama lokasi harus terdiri dari minimal 3 karakter.');
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
