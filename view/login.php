<body>
    <style>
         .register-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }

    .register-button:hover {
        background-color: #45a049;
    }

    .login-button{
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
    }
        .card {
            max-width: 300px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 300px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            display-content: center;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            max-width:120px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="card">
        <h2>Login</h2>
        <form action="login?action=save" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required>
            
            <input class="login-button" type="submit" value="Login">
        </form>

        <form action="register?action=register" method="POST">
            <button type="submit" class="register-button">Register</button>
        </form>
    </div>
</body>
