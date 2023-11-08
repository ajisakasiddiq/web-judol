<?php
require_once(__DIR__ . '/../model/Auth.php');
require_once 'controller/controllers.php';

class Admin {
    static function login_form() {
        view('login');
    }

  
    static function login_save() {
       
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
    
                $user = LoginModel::authenticateUser($email, $pass);
    
                if ($user) {
                    session_start();
                    $_SESSION['nama'] = $user['nama'];
                    header("Location: " . BASEURL . "success.php");
                    exit();
                } else {
                    $error_message = "Email atau password Anda salah. Silakan coba lagi!";
                    header("Location: " . BASEURL . "gagal.php");
                    exit();
                }
            }
        }
    
        public static function showLoginForm() {
            // Di sini Anda dapat menampilkan halaman login
            // Misalnya, jika menggunakan PHP, Anda dapat memuat file tampilan login.php di sini.
        }
    }
   
    

