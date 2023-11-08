<?php
class LoginModel {
    private $conn;

    public function __construct($databaseConnection) {
        $this->conn = $databaseConnection;
    }

    public function checkCredentials($email, $password) {
        // Lindungi dari SQL injection dengan menggunakan prepared statement
        $stmt = $this->conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            return true; // Login berhasil
        }
        return false; // Login gagal
    }
}
?>
