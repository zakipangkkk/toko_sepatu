<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Sukses</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            width: 380px;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            animation: zoomIn .4s ease;
        }

        /* Ikon centang */
        .icon {
            background:  #007BFF;
            color: white;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin: auto;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: pop 0.5s ease;
        }

        h2 {
            margin-top: 20px;
            color: #333;
        }

        p {
            color: white;
            margin: 10px 0 20px;
        }

        .btn {
            display: inline-block;
            background:  #007BFF;
            padding: 10px 16px;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.2s;
        }

        .btn:hover {
            background:  #007BFF;
        }

        @keyframes pop {
            0% { transform: scale(0); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes zoomIn {
            0% { transform: scale(.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="icon">✓</div>
        <h2>Pesanan Berhasil!</h2>
        <p>Terima kasih, pesanan Anda sedang diproses.</p>

        <a href="web.php" class="btn">Kembali ke Beranda</a>
    </div>

</body>
</html>
