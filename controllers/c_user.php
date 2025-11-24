<?php
// Memanggil file m_user yang ada pada model
include_once '../models/m_user.php';

// Membuat objek model
$user = new m_user();

// Variabel untuk menampung data user
$data_user = [];

try {

    // Jika ada aksi
    if (isset($_GET['aksi'])) {

        $aksi = $_GET['aksi'];

        // ------------------- TAMBAH DATA -------------------
        if ($aksi == 'tambah') {

            $nama     = $_POST['nama'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $role     = $_POST['role'];

            $result = $user->tambah_data($nama, $password, $email, $role);

            if ($result) {
                echo "<script>alert('Data berhasil ditambahkan'); window.location='../views/v_tampil_data_user.php';</script>";
            } else {
                echo "<script>alert('Data gagal ditambahkan'); window.location='../views/v_tambah_data_user.php';</script>";
            }

        }

        // ------------------- UPDATE DATA -------------------
        elseif ($aksi == 'update') {

            $user_id  = $_POST['user_id'];
            $nama     = $_POST['nama'];
            $email    = $_POST['email'];
            $password = $_POST['password']; // boleh kosong!

            // Jika password kosong → jangan ubah password
            if ($password == "" || empty($password)) {
                $result = $user->update_data_no_password($user_id, $nama, $email);
            } else {
                $result = $user->update_data($user_id, $nama, $password, $email);
            }

            if ($result) {
                echo "<script>alert('Data user berhasil diupdate'); window.location='../views/v_tampil_data_user.php';</script>";
            } else {
                echo "<script>alert('Data user gagal diupdate'); window.location='../views/v_tampil_data_user.php';</script>";
            }

        }

        // ------------------- HAPUS DATA -------------------
        elseif ($aksi == 'hapus') {

            $user_id = $_GET['user_id'];

            $result = $user->hapus_data($user_id);

            if ($result) {
                echo "<script>alert('Data user berhasil dihapus'); window.location='../views/v_tampil_data_user.php';</script>";
            } else {
                echo "<script>alert('Data user gagal dihapus'); window.location='../views/v_tampil_data_user.php';</script>";
            }
        }

    } 
    
    // ------------------- TAMPIL DATA (default) -------------------
    else {
        $user = $user->tampil_data();
    }

} catch (Exception $e) {
    echo "Terjadi Error: " . $e->getMessage();
}
?>
