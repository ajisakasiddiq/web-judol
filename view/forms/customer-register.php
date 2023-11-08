<?php
$url = $_GET['url'] ?? '/mvc-dynamic-tugas';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #fff;
            max-width: 600px; /* Atur lebar kartu sesuai kebutuhan Anda */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px #999;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="password"] {
            width: 350px; /* Lebar formulir tetap 350px */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Pendaftaran</h2>
        <form action="register?action=save" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="no_telpon">Nomor Telepon:</label>
            <input type="tel" id="no_telpon" name="no_telpon" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required><br><br>

            <!-- <label for="id_role_detail">ID Peran Rinci:</label>
            <input type="text" id="id_role_detail" name="id_role_detail" required><br><br> -->

            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>
