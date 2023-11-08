<?php
// Mendapatkan rute dari URL
$route = $_GET['route'] ?? 'register';

if ($route === 'register') {
    require_once __DIR__ . '/../views/forms/customer-register.php';
} elseif ($route === 'process_register') {
    require_once 'RegisterController.php';
    $controller = new RegisterController();
    $controller->processRegistration();
} elseif ($route === 'success') {
    require_once __DIR__ . '/../views/success.php';
} else {
    echo 'Halaman tidak ditemukan';
}
