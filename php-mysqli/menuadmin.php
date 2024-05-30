<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas UAS</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('blue1.jpeg'); 
            background-size: cover;
            animation: backgroundAnimation 15s infinite alternate;
        }

        @keyframes backgroundAnimation {
            0% { filter: brightness(1); }
            100% { filter: brightness(0.7); }
        }

        header {
            background-color: rgba(0, 123, 255, 0.9); /* Blue */
            padding: 30px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-in-out;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: rgba(40, 167, 69, 0.9); /* Green */
            overflow: hidden;
            text-align: center;
            animation: slideIn 1s ease-in-out;
        }

        @keyframes slideIn {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        nav ul li {
            display: inline-block;
        }

        nav ul li a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 16px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            color: #ffc107; /* Yellow */
        }

        .menu-section {
            padding: 30px;
            text-align: center;
            background-color: rgba(23, 162, 184, 0.9); /* Cyan */
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Halo Petani</h1>
        <h5>Kelompok 4</h5>
    </header>
    <nav>
        <ul>
           
            <li><a href="artikel.php">Artikel (Article)</a></li>
            <li><a href="questionadmin.php">pertanyaan bermasalah</a></li>
           
        </ul>
    </nav>
    <div class="menu-section">
        
    </div>
</body>
</html>
