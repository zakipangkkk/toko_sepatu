<?php

include_once "../models/m_user.php";

$user = new m_user();

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $user->login($username, $password);

    if ($data) {
        // Simpan session
        $_SESSION['user'] = $data;

        header("Location: ../views/home.php");
        exit;
    } else {
        echo "Login gagal! Username atau password salah.";
    }
}
