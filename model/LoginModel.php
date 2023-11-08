<?php
class LoginModel {
    public static function authenticateUser($email, $pass) {
        // Hubungkan ke database (gunakan koneksi yang sesuai)
        $conn = mysqli_connect("localhost", "root", "", "db_judol");

        // Periksa apakah koneksi berhasil
        if (!$conn) {
            die("Koneksi ke database gagal: " . mysqli_connect_error());
        }

        // Lakukan pemeriksaan kredensial
        $email = mysqli_real_escape_string($conn, $email);
        $pass = hash('sha256', $pass);

        $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

        // Periksa apakah kueri berhasil
        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }

        // Periksa apakah ada baris yang sesuai
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            // Tutup koneksi database
            mysqli_close($conn);

            return $user; // Kredensial benar, kembalikan data pengguna
        } else {
            // Tutup koneksi database
            mysqli_close($conn);

            return null; // Kredensial tidak cocok, kembalikan null
        }
    }
}
?>
