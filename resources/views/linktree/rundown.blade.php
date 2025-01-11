<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Rundown</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        .schedule-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .schedule-container h2 {
            color: #2e7d32;
            margin-bottom: 20px;
        }

        .schedule-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            margin: 10px 0;
            border-radius: 8px;
            background: linear-gradient(135deg, #c5e1a5, #7cb342);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
            font-weight: bold;
        }

        .schedule-item:nth-child(even) {
            background: linear-gradient(135deg, #8bc34a, #558b2f);
        }

        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #000000;
        }

        .back-button {
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            background: #2e7d32;
            color: #ffffff;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .back-button:hover {
            background: #4caf50;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="schedule-container">
            <h2>Rundown Acara Syawalan</h2>
            <div class="schedule-item">
                <span>09:00 </span>
                <span>Registrasi dan Foto Keluarga</span>
            </div>
            <div class="schedule-item">
                <span>10:00</span>
                <span>Pembukaan dan Sambutan</span>
            </div>
            <div class="schedule-item">
                <span>10:30</span>
                <span>Siraman Rohani</span>
            </div>
            <div class="schedule-item">
                <span>11:00</span>
                <span>Doa Bersama</span>
            </div>
            <div class="schedule-item">
                <span>11:15</span>
                <span>Ikrar Syawalan Trah</span>
            </div>
            <div class="schedule-item">
                <span>11:30</span>
                <span>Sungkeman dan Halal bihalal</span>
            </div>
            <div class="schedule-item">
                <span>12:00</span>
                <span>Foto, Makan siang, Penutupan</span>
            </div>
        </div>
        <a href="{{ route('linktree') }}" class="back-button">Kembali</a>
    </div>
</body>
</html>
