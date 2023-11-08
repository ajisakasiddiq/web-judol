<?php
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


