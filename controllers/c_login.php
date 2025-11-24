<?php
session_start();
require '../models/m_koneksi.php';

$koneksi = new koneksi();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = trim($_POST['nama']);
    $pass = trim($_POST['password']);

    // Validasi input
    if ($user === "" || $pass === "") {
        echo "<script>alert('Username/Email dan Password wajib diisi!'); window.location='../views/index.php';</script>";
        exit;
    }

    // Query pakai prepared statement
    $sql = "SELECT user_id, nama, email, password, role 
            FROM users 
            WHERE nama = ? OR email = ?";

    $stmt = $koneksi->koneksi->prepare($sql);
    $stmt->bind_param("ss", $user, $user);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek user ada
    if ($result->num_rows === 1) {

        $data = $result->fetch_assoc();

        // Cek password hash
        if (password_verify($pass, $data['password'])) {

            // Set SESSION
            $_SESSION['user_id'] = $data['user_id'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = $data['role'];

            // Redirect berdasarkan role
            if ($data['role'] == 'admin') {
                header("Location: ../views/web_admin.php");
            } else {
                header("Location: ../views/web.php");
            }

            exit;

        } else {
            echo "<script>alert('Password salah!'); window.location='../views/index.php';</script>";
            exit;
        }

    } else {
        echo "<script>alert('Username atau Email tidak ditemukan!'); window.location='../views/index.php';</script>";
        exit;
    }
}
?>
