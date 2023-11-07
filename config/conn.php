<?php
$remote = false;
if (!$remote) {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_judol";
}
else {
    $host = "rdnet.id:22090";
    $username = "";
    $password = "";
    $database = $username;
}

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}