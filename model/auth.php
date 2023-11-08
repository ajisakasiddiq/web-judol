<?php
class LoginModel {
    public static function authenticateUser($email, $pass) {
        // Hubungkan ke database (gunakan koneksi yang sesuai)
        $conn = mysqli_connect("localhost", "root", "", "db_judol");

        // Periksa apakah koneksi berhasil
        if (!$conn) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        // Lakukan pemeriksaan kredensial
        $email = mysqli_real_escape_string($conn, $email);
    $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'"; // Menghapus hash pada $pass
    $result = mysqli_query($conn, $sql);

        // Periksa apakah kueri berhasil
        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        // Periksa apakah ada baris yang sesuai
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Tutup koneksi database
            mysqli_close($conn);

            return $user; // Kredensial benar, kembalikan data pengguna
        } else {
            // Tutup koneksi database
            mysqli_close($conn);

            return null; // Kredensial tidak cocok, kembalikan null
        }
    }

    public static function logout() {
        session_start();
        // Hapus semua data sesi
        session_unset();
        // Hancurkan sesi
        session_destroy();
        // Redirect ke halaman login atau halaman lain yang sesuai
        header("Location: " . BASEURL . "login");
        exit();
    }
    
}



class UserModel {
    private static $conn;

    // Hapus konstruktor ini, karena koneksi database sudah di-handle di conn.php

    public static function insert($name, $phone, $email, $pass, $id_role_detail = 2) {
        // Menggunakan koneksi yang sudah ada dari conn.php
        include 'config/conn.php';

        $sql = "INSERT INTO user (nama, no_telpon, email, pass, id_role_detail) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $phone, $email, $pass, $id_role_detail);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
