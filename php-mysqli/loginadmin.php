<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | HaloPetani</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: 667FFF;
            color: #000;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .login-section, .info-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-section {
            background-color: #00bcd4; /* Biru muda */
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center
        }

        .info-section {
            background-color: #e0f7fa;
            background-image: url('OIG1.hbduJr8Uu2i.jpeg'); /* Ganti dengan URL gambar Anda */
            background-size: cover;
            background-position: center;
            color: #000;
            text-align: center;
            padding: 40px;
        }

        .login-container {
            max-width: 900px;
            width: 100%;
            background-image: url('OIG1.hbduJr8Uu2i.jpeg');
            border-radius: 10px; /* Tambahkan ini untuk membuat sudut melengkung */
            background-color: #00bcd4; /* Biru muda */
        border-radius: 10px; /* Membuat sudut melengkung */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
        animation: pulse 2s infinite; /* Menambahkan animasi */
        text-align: center
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #000;
            text-align: center; /* Added to center the text */
        }

        .login-container p {
            margin-bottom: 40px;
            color: #000;
            text-align: center
        }

        .input-group {
            margin-bottom: 20px;
            text-align: center
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #000;
            text-align: center
        }

        .input-group input {
            width: 100%;
            max-width: 300px; /* Tambahkan ini untuk membatasi lebar maksimum */
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: center
        }

        .button-container {
            display: flex;
            justify-content: center; /* Ubah ini */
            align-items: center;
        }

        .login-button, .signup-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-items: center;
            transition: background-color 0.3s, transform 0.3s;
            margin: auto; /* Tambahkan ini */
        }

        .login-button {
            background-color: #007bff;
            color: #000;
            text-align: center
        }

        .login-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
            text-align: center
        }

        .signup-button {
            background-color: #00bcd4; /* Biru muda */
            color: #000; /* Hitam */
            border: 1px solid #007bff;
            text-align: center
        }

        .signup-button:hover {
            background-color: #e0f7fa;
            transform: scale(1.05);
            text-align: center
        }


        .footer-links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .footer-links a {
            margin: 0 10px;
            color: #007bff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="login-container">
                <h2 style="text-align: center;">Welcome to HaloPetani</h2>
                <p>Please Login to your Account.</p>
                <form action="backendadmin.php" method="POST">
                    <div class="input-group">
                        <label for="adminname">AdminName</label>
                        <input type="text" id="adminname" name="adminname" placeholder="AdminName" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                   
                    <div class="button-container">
                        <button type="submit" value="Masuk" name="login" class="login-button">Login</button>
                       
                    </div>
                </form>
                
            </div>
        </div>
        <div class="info-section">
            <div>
                
                <img style="max-width: 100%; height: auto;">
            </div>
        </div>
    </div>
</body>
</html>

