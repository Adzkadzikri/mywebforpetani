<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Pengguna Baru | HaloPetani</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-image: url('hutan1.jpg'); 
            background-size: cover;
            animation: backgroundAnimation 20s infinite alternate;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        @keyframes backgroundAnimation {
            0% { filter: brightness(1); }
            100% { filter: brightness(0.8); }
        }

        .login-container {
            width: 300px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .input-group {
            margin-bottom: 20px;
            width: 100%;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }

        .input-group label {
            display: block;
            color: #333333;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #5c6bc0;
            border-radius: 5px;
            background-color: #f4f4f9;
            color: #333;
        }

        .button-container {
            text-align: center;
            width: 100%;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #5c6bc0;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .login-button:hover {
            background-color: #3f51b5;
            transform: scale(1.05);
        }

        .link-container {
            text-align: center;
            margin-top: 20px;
        }

        .link-container a {
            color: #5c6bc0;
            text-decoration: none;
            transition: color 0.3s;
        }

        .link-container a:hover {
            color: #3f51b5;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <header style="text-align: center;">
            <h3>Formulir Pendaftaran Pengguna Baru</h3>
        </header>
        <form action="proses-daftar.php" method="POST">
            <div class="input-group">
                <label for="phonenumber">PhoneNumber: </label>
                <input type="text" id="phonenumber" name="phonenumber" placeholder="PhoneNumber" required />
            </div>
            <div class="input-group">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" placeholder="Password" required />
            </div>
            <div class="input-group">
                <label for="fullname">FullName: </label>
                <input type="text" id="fullname" name="fullname" placeholder="FullName" required />
            </div>
            <div class="button-container">
                <input type="submit" value="Daftar" name="daftar" class="login-button" />
            </div>
        </form>
        <p>Sudah daftar? <a href="login-pengguna.php">Masuk di sini</a></p>
    </div>
</body>
</html>
