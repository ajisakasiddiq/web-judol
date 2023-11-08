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
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['id_role_detail'] = $user['id_role_detail'];
                // Periksa nilai id_role_detail
                if ($user['id_role_detail'] == 1) {
                    header("Location: " . BASEURL . "dashboard");
                } else {
                    header("Location: " . BASEURL . "success.php");
                }
                exit();
            } else {
                $error_message = "Email atau password Anda salah. Silakan coba lagi!";
                header("Location: " . BASEURL . "gagal.php");
                exit();
            }
        }
    }
    
    
         static function dashboard() {
            view('forms/dashboard');
            // Di sini Anda dapat menampilkan halaman login
            // Misalnya, jika menggunakan PHP, Anda dapat memuat file tampilan login.php di sini.
        }
    }
   
    

