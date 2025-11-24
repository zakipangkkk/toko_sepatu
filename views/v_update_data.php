<?php
include_once "../models/m_user.php";

$m = new m_user();

// ambil data user berdasarkan id di URL
$user = $m->tampil_data_by_id($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>

    <style>
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: auto;
            margin-top: 30px;
        }
        .card h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Update Data User</h2>

    <form action="../controllers/c_user.php?aksi=update" method="POST">

        <input type="hidden" name="user_id" value="<?= $user->user_id ?>">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $user->nama ?>">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="<?= $user->email ?>">
        </div>

        <div class="form-group">
            <label>Password (kosongkan bila tidak ingin mengubah)</label>
            <input type="password" name="password">
        </div>

        <button type="submit" class="btn">Update</button>
    </form>
</div>

</body>
</html>
