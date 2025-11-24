<?php 
include '../models/koneksi.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Produk</title>
    <style>
        body{font-family:Arial;background:#f6f6f6;margin:0;padding:0;}
        header{background:#0a84ff;color:white;padding:15px;text-align:center;font-size:20px;}
        .container{width:90%;max-width:500px;margin:30px auto;background:white;padding:20px;border-radius:8px;box-shadow:0 4px 8px rgba(0,0,0,0.1);}
        label{display:block;margin:15px 0 5px;font-weight:bold;}
        input,textarea{width:100%;padding:10px;border-radius:5px;border:1px solid #aaa;box-sizing:border-box;}
        button{background:#0a84ff;color:white;border:none;padding:12px;font-size:16px;cursor:pointer;border-radius:5px;margin-top:20px;width:100%;}
        button:hover{background:#006cd1;}
        .produk-info{background:#e0f0ff;padding:10px;border-radius:5px;margin-bottom:15px;font-size:16px;}
    </style>
</head>
<body>
<header>Checkout Pembelian</header>
<div class="container">
    <div class="produk-info">
        <strong>Produk:</strong> <?= htmlspecialchars($produk['nama_produk']) ?><br>
        <strong>Harga:</strong> Rp <?= number_format($produk['harga'],0,',','.') ?>
    </div>
    <form action="../controllers/proses_pesan.php" method="POST">
        <input type="hidden" name="produk_id" value="<?= $produk['produk_id'] ?>">
        <label>Jumlah</label>
        <input type="number" name="jumlah" value="1" min="1" required>
        <label>No. HP</label>
        <input type="text" name="no_hp" placeholder="Masukkan nomor HP" required>
        <label>Alamat</label>
        <textarea name="alamat" placeholder="Masukkan alamat lengkap" rows="4" required></textarea>
        <button type="submit">Pesan Sekarang</button>
    </form>
</div>
</body>
</html>
