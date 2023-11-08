<?php
require_once(__DIR__ . '/../models/UserModel.php');


class RegisterController {
    public function showRegistrationForm() {
        include 'view/forms/customer-register.php';
    }

    public function processRegistration() {
        $name = $_POST['nama'];
        $phone = $_POST['no_telpon'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id_role_detail = $_POST['id_role_detail'];

        // Lakukan validasi dan penyimpanan data ke database menggunakan model
        $userModel = new UserModel();
        $registrationSuccessful = $userModel->registerUser($name, $phone, $email, $password);
        

        if ($registrationSuccessful) {
            header('Location: success.php');
        } else {
            echo 'Pendaftaran gagal. Silakan coba lagi.';
        }
    }
}
