<?php

require_once(__DIR__ . '/../model/Auth.php');
require_once 'controller/controllers.php';

class RegisterController {
    static function register_form() {
        view('forms/customer-register');
    }

    static function register_save() {
        $nama = $_POST['nama'];
        $no_telpon = $_POST['no_telpon'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $id_role_detail = 2; // Nilai default untuk id_role_detail
    
        // Validasi data jika diperlukan
    
        // Simpan data ke database atau lakukan tindakan lain yang diperlukan
        if (UserModel::insert($nama, $no_telpon, $email, $pass, $id_role_detail)) {
            // Arahkan ke halaman utama
            header('Location: '.BASEURL.'success.php');
        } else {
            // Tindakan jika penyimpanan gagal
            view('subview/add', ['header' => titleheader('Menambah Data Mahasiswa Gagal', 'h1', 'text-center mb-3')]);
        }
    }
    
}
