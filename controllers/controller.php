<?php
require_once ('model/login-model.php');
require_once('config/conn.php');

class LoginController {
    public function login_form() {
        include 'views/login_view.php';
    }

    public function login_save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            require_once 'config/conn.php';

            $model = new LoginModel($conn);
            if ($model->checkCredentials($email, $password)) {
                echo "Login berhasil!";
                // Anda dapat mengarahkan pengguna ke halaman lain di sini jika login berhasil
            } else {
                echo "Login gagal! Coba lagi.";
            }

            $conn->close();
        }
    }
}
?>
