<?php


class LoginModel {
    
    private static $conn;

    public static function authenticateUser($email, $password) {
        include 'config/conn.php';
        $sql = "SELECT `email`, `pass` FROM `user` WHERE `email` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 0) {
            // Pengguna tidak ditemukan
            return false;
        }
    
        $user = $result->fetch_assoc();
    
        if (password_verify($password, $user['pass'])) {
            return $user; // Pengguna berhasil diautentikasi
        } else {
            return false; // Password salah
        }
    }
    
}
?>
