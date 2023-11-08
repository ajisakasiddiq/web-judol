<?php
require_once(__DIR__ . '/../model/LoginModel.php');
require_once 'controller/controllers.php';

class Admin {
    static function login_form() {
        view('login');
    }

    public static function login_save() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
    
            // Create an instance of the LoginModel
            $loginModel = new LoginModel();
            
            // Call the non-static method on the instance
            $user = $loginModel->authenticateUser($email, $pass);
    
            if ($user) {
                // Autentikasi berhasil, lanjutkan ke halaman admin
                $_SESSION['user_id'] = $user['user_id'];
                // Redirect to the admin page or display a success message
                header('Location:' . BASEURL . 'success.php');
                echo 'Login berhasil! Anda sekarang masuk sebagai admin.';
            } else {
                // Authentication failed, display an error message
                echo 'Autentikasi gagal. Pastikan email dan password Anda benar.';
            }
        }
    }
    
}
