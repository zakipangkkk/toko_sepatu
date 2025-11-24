<?php include "../models/m_koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Sepatu</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f6f6f6;
        }
        header {
            background: #0a84ff;
            padding: 15px;
            color: white;
            text-align: center;
            font-size: 20px;
        }
        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
        }
        .card {
            background: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card img {
            width: 100%;
            border-radius: 5px;
        }
        .card h3 {
            margin: 10px 0 5px;
        }
        .price {
            font-weight: bold;
            color: #0a84ff;
        }
        button {
            margin-top: 10px;
            width: 100%;
            padding: 10px;
            background: #0a84ff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #006cd1;
        }
        img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .navbar {
            background-color: #007BFF; /* Warna biru */
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .navbar a:hover {
            opacity: 0.8;
        }

    </style>
</head>
<body>

<div class="navbar">
        <div class="logo">
            <a href="#">MY LOGO</a>
        </div>
        <div class="menu">
            <a href="v_tampil_data_user.php">daftar user</a>
            <a href="pesanan_admin.php">daftar pesanan</a>
            <a href="v_tampil_data_produk.php">daftar produk</a>
        </div>
    </div>
<div class="container">
    <div class="grid">

        <?php
        $data = mysqli_query($koneksi->koneksi, "SELECT * FROM produk");
        while ($produk = mysqli_fetch_assoc($data)) {
        ?>

        <div class="card">
            <!-- Kalau belum punya gambar, pakai placeholder -->
            <img src="../assets/<?= $produk['gambar']; ?>" alt="<?= $produk['nama_produk']; ?>">


            <h3><?= $produk['nama_produk']; ?></h3>
            <p class="price">Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></p>
            <p>Stok: <?= $produk['stok']; ?></p>

            <a href="checkout.php?id=<?= $produk['produk_id']; ?>">
                <button>Beli Sekarang</button>
            </a>
        </div>

        <?php } ?>

    </div>
</div>

</body>
</html>
