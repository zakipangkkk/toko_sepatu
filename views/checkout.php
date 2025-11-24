
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            background: #f6f6f6;
            font-family: Arial, sans-serif;
            margin: 0;
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
        form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }
        button {
            background: #0a84ff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #006cd1;
        }
        a {
            text-decoration: none;
            color: #0a84ff;
        }
    </style>
</head>
<body>

<header>
    CHECKOUT PEMBELIAN
</header>

<form action="../controllers/c_pesan.php" method="POST">
    <?php
    include '../models/m_user.php';
    $user = new m_user();
    $id = $_GET['id'];
    $produk = $user->getProdukById($id);

    ?>
    <h2>Checkout Produk: <?= $produk['nama_produk']; ?></h2>
    <p>Harga: Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></p>
    <input type="hidden" name="produk_id" value="<?= $produk['produk_id']; ?>">




    Jumlah : <input type="number" name="jumlah"><br>
    No. HP : <input type="text" name="no_hp"><br>
    Alamat : <textarea name="alamat"></textarea><br>

    <button type="submit" name="submit">Pesan</button>
    <?php
    if (isset($_GET['notif']) && $_GET['notif'] == 'success') {
    include "notif.html";  // file HTML di atas
    
}
?>
</form>


</body>
</html>
