<?php
class UserModel {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'db_judol');
        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }
    }

    public function registerUser($name, $phone, $email, $password,$id_role_detail=2) {
        $sql = "INSERT INTO user (nama, no_telpon, email, password,id_role_detail) VALUES (?, ?, ?, ?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $phone, $email, $password,$id_role_detail);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
