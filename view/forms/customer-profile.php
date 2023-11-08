<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>
    <h2>Pendaftaran</h2>
    <form action="proses_pendaftaran.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $_SESSION['nama'] ?? ''; ?>" required><br><br>

        <label for="no_telpon">Nomor Telepon:</label>
        <input type="tel" id="no_telpon" name="no_telpon" value="<?php echo $_SESSION['no_telpon'] ?? ''; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'] ?? ''; ?>" required><br><br>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" value="<?php echo $_SESSION['pass'] ?? ''; ?>" required><br><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
