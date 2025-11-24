<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group .radio-group {
            display: flex;
            gap: 20px;
        }
        .form-group .radio-group input {
            margin-right: 5px;
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
        <h2>Form Pendaftaran Pengguna</h2>
            <form action="../controllers/c_user.php?aksi=tambah" method="POST"> 
                <input type="hidden" id="user_id" name="user_id" value="">
                <div class="form-group">
                    <label for="nama">nama</label>
                    <input type="text" id="nama" name="nama" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="">
                <div class="form-grop">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" placeholder="">
                </div>
                <div class="form-grop">
                    <label for="role">role</label>
                    <input type="text" id="role" name="role" placeholder="">
                </div>
                
                <button type="submit" class="btn">Daftar</button>
</form>
        </div>
</body>
</html>