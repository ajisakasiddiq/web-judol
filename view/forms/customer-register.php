
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