<?php
include_once "m_koneksi.php";

class m_user {

    // -------------------------------------------
    // TAMPIL SEMUA DATA
    // -------------------------------------------
    function tampil_data() {
        $koneksi = new koneksi();
        $sql = "SELECT * FROM users";
        $query = mysqli_query($koneksi->koneksi, $sql);

        $result = [];

        if ($query->num_rows > 0) {
            while ($data = mysqli_fetch_object($query)) {
                $result[] = $data;
            }
        }

        return $result; // kembalikan array (meskipun kosong)
    }

    // -------------------------------------------
    // TAMPIL DATA BERDASARKAN ID
    // -------------------------------------------
    function tampil_data_by_id($user_id) {
        $koneksi = new koneksi();

        $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
        $query = mysqli_query($koneksi->koneksi, $sql);

        return mysqli_fetch_object($query);
    }

    // -------------------------------------------
    // TAMBAH DATA
    // -------------------------------------------
   function tambah_data($nama, $password, $email, $role) {
    $koneksi = new koneksi();

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (nama, password, email, role)
            VALUES ('$nama', '$hashed_password', '$email', '$role')";

    $result = mysqli_query($koneksi->koneksi, $sql);

        if (!$result) {
            die("Query Error: " . mysqli_error($koneksi->koneksi));
    }

        return $result;
}


    // -------------------------------------------
    // UPDATE DATA (dengan password)
    // -------------------------------------------
    function update_data($user_id, $nama, $password, $email) {
        $koneksi = new koneksi();

        // hash password baru
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET 
                nama = '$nama',
                email = '$email',
                password = '$hashed_password'
                WHERE user_id = '$user_id'";

        return mysqli_query($koneksi->koneksi, $sql);
    }

    // -------------------------------------------
    // UPDATE DATA (tanpa ubah password)
    // -------------------------------------------
    function update_data_no_password($user_id, $nama, $email) {
        $koneksi = new koneksi();

        $sql = "UPDATE users SET 
                nama = '$nama',
                email = '$email'
                WHERE user_id = '$user_id'";

        return mysqli_query($koneksi->koneksi, $sql);
    }

    // -------------------------------------------
    // HAPUS DATA
    // -------------------------------------------
    function hapus_data($user_id) {
        $koneksi = new koneksi();

        $sql = "DELETE FROM users WHERE user_id = '$user_id'";

        return mysqli_query($koneksi->koneksi, $sql);
    }
  public function login($username, $password)
    {
        // Query ke database
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $this->koneksi->query($query);

        // Kalau data ditemukan
        if ($result->num_rows > 0) {
            return $result->fetch_assoc(); // Return data user
        } else {
            return false;
        }
    }
    public function tambahPesanan($user_id, $produk_id, $jumlah, $no_hp, $alamat)
    {
        $koneksi = new koneksi();
        $sql = "INSERT INTO pesanan (user_id, produk_id, jumlah, no_hp, alamat)
                VALUES('$user_id', '$produk_id', '$jumlah', '$no_hp', '$alamat')";

        return mysqli_query($koneksi->koneksi, $sql);
    }
    public function getProdukById($id){
        $koneksi = new koneksi();
    $sql = "SELECT * FROM produk WHERE produk_id = '$id'";
    $query = $koneksi->koneksi->query($sql);
    return $query->fetch_assoc();
    }
    function tampil_data_produk() {
        $koneksi = new koneksi();
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($koneksi->koneksi, $sql);

        $result = [];

        if ($query->num_rows > 0) {
            while ($data = mysqli_fetch_object($query)) {
                $result[] = $data;
            }
        }

        return $result; // kembalikan array (meskipun kosong)
    }



}
?>
