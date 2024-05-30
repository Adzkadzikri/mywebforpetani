<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];

    // Menggunakan praepared statement untuk meningkatkan keamanan
    $stmt = $koneksi->prepare("SELECT * FROM admni WHERE adminname = ? AND password = ?");
    if ($stmt === false) {
        die("Error preparing statement: " . $koneksi->error);
    }
    $stmt->bind_param("ss", $adminname, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Admin found
        $data = $result->fetch_assoc();
        $_SESSION['admin'] = $data;
        error_log("Admin found, redirecting to menuadmin.php");
        header("Location: menuadmin.php");
        exit();
    } else {
        // Admin not found
        $error = "AdminName atau password tidak sesuai.";
        header("Location: loginadmin.php?error=" . urlencode($error));
        exit();
    }

    $stmt->close();
    $koneksi->close();
}
