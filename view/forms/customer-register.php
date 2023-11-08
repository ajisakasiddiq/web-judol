<style>
    .card {
        max-width: 400px;
        padding: 20px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 0 auto;
    }

    h2 {
        color: #007bff;
    }

    label {
        display: block;
        font-weight: bold;
        margin-top: 15px;
    }

    input {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        margin-top: 20px;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div class="card">
        <h2>Pendaftaran</h2>
        <form action="register?action=save" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="no_telpon">Nomor Telepon:</label>
            <input type="tel" id="no_telpon" name="no_telpon" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required>

            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
