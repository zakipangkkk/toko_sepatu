<?php 
include_once "../controllers/c_produk.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>

    <style>
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        thead {
            background-color: #169bdeff;
            color: white;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            font-weight: bold;
        }
        h2 {
            text-align: left;
            margin-left: 30px;
            color: #4a148c;
        }
        .header-menu {
            display: flex;
            justify-content: flex-start;
            padding: 10px 0;
            margin-bottom: 20px;
            padding-left: 30px;
        }
        .header-menu a {
            text-decoration: none;
            color: #4a148c;
            font-weight: bold;
            font-size: 18px;
        }
        .action-buttons a {
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            margin-right: 5px;
        }
        .action-buttons .btn-update {
            background-color: #ffc107;
        }
        .action-buttons .btn-delete {
            background-color: #dc3545;
        }
        tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>

</head>
<body>

    <h2>Tambah User</h2>

    <div class="header-menu">
        <a href="v_tambah_data_user.php">Tambah User</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php if (!empty($user)) { 
                    $no = 1;
                    foreach ($user as $data) { ?>
                    
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->nama_produk ?></td>
                        <td><?= $data->harga ?></td>
                        <td><?= $data->stok ?></td>
                        <td class="action-buttons">
                            <a href="v_update_data.php?id=<?= $data->user_id ?>" class="btn-update">Update</a>

                            <a href="../controllers/c_user.php?aksi=hapus&user_id=<?= $data->user_id ?>"
                               class="btn-delete"
                               onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>

                <?php } 
                } else { ?>

                    <tr>
                        <td colspan="5" style="text-align:center; padding: 25px;">Tidak ada data</td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>

</body>
</html>
